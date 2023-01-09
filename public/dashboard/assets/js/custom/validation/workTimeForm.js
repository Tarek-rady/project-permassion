$(document).ready(function () {

    let locale = $('html').attr('lang');

    let time_msg = locale == 'ar' ? "يجب أن يكون وقت الإنتهاء أكبر من وقت البدء" : "The end time must be greater than the start time";

    $.validator.addMethod('greaterThanTime', function (value) {

        var startTime = $('#from').val();

        var endTime = value;

        // var start_am = startTime.replace(/[0-9]/g, '');
        // var end_am = value.replace(/[0-9]/g, '');

        var new_start_time = moment(startTime, ["h:mm A"]).format("HH:mm");
        var new_end_time = moment(endTime, ["h:mm A"]).format("HH:mm");

        if (new_end_time > new_start_time) {
            return true;
        } else {
            return false;
        }

    }, time_msg);


    $.validator.addMethod('lessThanTime', function (value) {

        var startTime = $('#to').val();

        var endTime = value;

        // var start_am = startTime.replace(/[0-9]/g, '');
        // var end_am = value.replace(/[0-9]/g, '');

        var new_start_time = moment(startTime, ["h:mm A"]).format("HH:mm");
        var new_end_time = moment(endTime, ["h:mm A"]).format("HH:mm");

        if (new_start_time > new_end_time) {
            return true;
        } else {
            return false;
        }

    }, time_msg);

    $('#WorkTimeForm').validate({ // initialize the plugin

        rules: {
            day_ar: {
                required: true,
                minlength: 3
            },
            day_en: {
                required: true,
                minlength: 3
            },
            from: {
                required: true,
                lessThanTime: true
            },
            to: {
                required: true,
                greaterThanTime: true
            },

        },


        errorElement: "span",
        errorLabelContainer: '.errorTxt',

        submitHandler: function(form) {
            form.submit();
        }
    });
});
