(function () {
    angular.module('config', []).config(['$interpolateProvider', function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    }]);


})();


var buildFormErrors = function($scopeError, data) {
    try {
        for (var property in data) {
            if (data.hasOwnProperty(property)) {
                $scopeError[property] = data[property];
            }
        }
    } catch (e) {
        console.log(e);
    }
    return $scopeError;
}

var setDatePickerVal = function(v) {
    $('.datepicker').datepicker('setDate', v);
    $('.datepicker').datepicker('update');
    $('.datepicker').val('');
}