$(document).ready(function () {

    let locale = $('html').attr('lang');

    // create form
    $('#createServiceForm').validate({ // initialize the plugin

        rules: {
            name_ar: {
                required: true,
                minLength: 3
            },
            name_en: {
                required: true,
                minLength: 3
            },
            image: {
                required: true,
                extension: 'jpg|jpeg|png'
            },

        },

        messages: {
            image: {
                extension: locale == 'ar' ? 'يجب أن تكون الصورة من نوع png أو jpg أو jpeg' : 'The image must be png or jpg or jpeg'
            }
        },

        errorElement: "span",
        errorLabelContainer: '.errorTxt',

        submitHandler: function(form) {
            form.submit();
        }
    });

    // update form
    $('#updateServiceForm').validate({ // initialize the plugin

        rules: {
            name_ar: {
                required: true,
                minLength: 3
            },
            name_en: {
                required: true,
                minLength: 3
            },
            image: {
                // required: true,
                extension: 'jpg|jpeg|png'
            },

        },

        messages: {
            image: {
                extension: locale == 'ar' ? 'يجب أن تكون الصورة من نوع png أو jpg أو jpeg' : 'The image must be png or jpg or jpeg'
            }
        },

        errorElement: "span",
        errorLabelContainer: '.errorTxt',

        submitHandler: function(form) {
            form.submit();
        }
    });
});
