var dashboard = angular.module('dashboard', ['config', 'ngTouch', 'angucomplete-alt']);

dashboard.controller('queueCtrl', ['$scope', '$http', function ($scope, $http) {
    $scope.message = '';
    $scope.queue = [];

    $http.get('/patient/onQueue').success(function(data) {
        $scope.queue = data;
    }).error(function(data, a) {
        showErrorMessage('Internal server error');
    });

    $scope.dateToMills = function(input) {
        dateToMills(input);
    }

    $scope.remoteUrlRequestFn = function(str) {
        return {q: str, limit: 10};
    };

    $scope.selectedPatient = function(selected) {
        if (selected) {
            $scope.$broadcast('angucomplete-alt:clearInput');
            queuePatient(selected.originalObject);
        }
    };

    $scope.removeFromQ = function(qId, index) {
        $scope.qId = qId;
        $scope.deQIndex = index;

        $('#confirmDoneModal').modal('show');
    }

    $scope.consult = function(patientId) {
        var url = '/patient/' + patientId + '/consult';
        var newTab = window.open(url, '_blank');
        newTab.focus();
    }

    $scope.okDeQ = function() {
        $http.post('/patient/queue/'+$scope.qId+'/remove').success(function(data) {

            if (parseInt(data) > 0) {
                $scope.queue.splice($scope.deQIndex, 1);
                $('#confirmDoneModal').modal('hide');
                showInfoMessage('Patient successfully removed from the queue');
            } else {
                showErrorMessage('Internal server error');
            }
        }).error(function(data, a) {
            showErrorMessage('Internal server error');
        });
    }

    $scope.cancelDeQ = function() {
        $('#confirmDoneModal').modal('hide');
    }

    $scope.cancelResetQ = function() {
        $('#confirmResetModal').modal('hide');
    }

    $scope.okResetQ = function() {
        $http.post('/patient/resetQueue').success(function(data) {
            if (parseInt(data) > 0) {
                $scope.queue = [];
                $('#confirmResetModal').modal('hide');

                showInfoMessage('Patient queue successfully reset');
            } else {
                showErrorMessage('Internal server error');
            }
        }).error(function(data, a) {
            showErrorMessage('Internal server error');
        });
    }

    $scope.resetQ = function() {
        $('#confirmResetModal').modal('show');
    }

    var queuePatient = function(patient) {
        $http.post('/patient/queue/' + patient.id).success(function(data) {
            if (!data.error) {
                $scope.queue.push({'id': data.entityId, 'patientId': patient.id, 'firstName': patient.firstName, 'lastName': patient.lastName, 'date': new Date()});

                showInfoMessage(patient.firstName + ' ' + patient.lastName + ' has been added to the queue');
            } else {
                showErrorMessage('Internal server error');
            }
        }).error(function(data, a) {
            showErrorMessage('Internal server error');
        });
    }
}]);
