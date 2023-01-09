$(document).ready(function () {

    let locale = $('html').attr('lang');

    // create form
    $('#createProjectForm').validate({ // initialize the plugin

        rules: {
            service_id: {
                required: true,
            },
            name_ar: {
                required: true,
                minLength: 3
            },
            name_en: {
                required: true,
                minLength: 3
            },
            desc_ar: {
                required: true,
                minLength: 3
            },
            desc_en: {
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
    $('#updateProjectForm').validate({ // initialize the plugin

        rules: {
            service_id: {
                required: true,
            },
            name_ar: {
                required: true,
                minLength: 3
            },
            name_en: {
                required: true,
                minLength: 3
            },
            desc_ar: {
                required: true,
                minLength: 3
            },
            desc_en: {
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
