(function () {
    angular.module('config', []).config(['$interpolateProvider', function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    }]);


    $(document).on('click', '.close', function(e){
        closeAlert($(this).parent('.alert'));
    });
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


var hideMessage = function() {
    $('.alert').addClass('hidden');
    $('.alert-span').text('');
}

var showErrorMessage = function(message) {
    $('.alert-danger').removeClass('hidden');
    $('.alert-info').addClass('hidden');

    $('.alert .danger').text(message);
    $('.alert .info').text('');
}

var showInfoMessage = function(message) {
    $('.alert-info').removeClass('hidden');
    $('.alert-danger').addClass('hidden');

    $('.alert-info .info').text(message);
    $('.alert-danger .danger').text('');
}

var dateToMills = function(input) {
    return new Date(input).getTime();
}

var closeAlert = function(div) {
    div.addClass('hidden');
    div.children('span').text('');
}