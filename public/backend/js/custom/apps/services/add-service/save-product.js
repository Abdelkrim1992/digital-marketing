const KTAppEcommerceSaveProduct = function () {

    const initializeRepeater = () => {
        $("#kt_ecommerce_add_product_options").repeater({
            initEmpty: false,
            defaultValues: { "text-input": "foo" },
            show: function () {
                $(this).slideDown();
                initializeSelect2();
            },
            hide: function (e) {
                $(this).slideUp(e);
            }
        });
    };

    const initializeSelect2 = () => {
        document.querySelectorAll('[data-kt-ecommerce-catalog-add-product="product_option"]').forEach((element) => {
            if (!$(element).hasClass("select2-hidden-accessible")) {
                $(element).select2({
                    minimumResultsForSearch: -1
                });
            }
        });
    };

    const initializeTagify = () => {
        ["#kt_ecommerce_add_product_category", "#kt_ecommerce_add_product_tags"].forEach((selector) => {
            const element = document.querySelector(selector);
            if (element) {
                new Tagify(element, {
                    whitelist: ["new", "trending", "sale", "discounted", "selling fast", "last 10"],
                    dropdown: {
                        maxItems: 20,
                        classname: "tagify__inline__suggestions",
                        enabled: 0,
                        closeOnSelect: false
                    }
                });
            }
        });
    };

    const initializeDiscountSlider = () => {
        const slider = document.querySelector("#kt_ecommerce_add_product_discount_slider");
        const label = document.querySelector("#kt_ecommerce_add_product_discount_label");
        
        noUiSlider.create(slider, {
            start: [10],
            connect: true,
            range: { min: 1, max: 100 }
        });

        slider.noUiSlider.on("update", (values, handle) => {
            label.innerHTML = Math.round(values[handle]);
        });
    };

    const initializeDropzone = () => {
        new Dropzone("#kt_ecommerce_add_product_media", {
            url: "https://keenthemes.com/scripts/void.php",
            paramName: "file",
            maxFiles: 10,
            maxFilesize: 10,
            addRemoveLinks: true,
            accept: function (file, done) {
                if (file.name === "wow.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });
    };

    const initializeStatusHandler = () => {
        const statusElement = document.getElementById("kt_ecommerce_add_product_status");
        const statusSelect = document.getElementById("kt_ecommerce_add_product_status_select");
        const statusClasses = ["bg-success", "bg-warning", "bg-danger"];
        const datepicker = document.getElementById("kt_ecommerce_add_product_status_datepicker");

        $(statusSelect).on("change", (event) => {
            switch (event.target.value) {
                case "published":
                    statusElement.classList.remove(...statusClasses);
                    statusElement.classList.add("bg-success");
                    hideDatepicker();
                    break;
                case "scheduled":
                    statusElement.classList.remove(...statusClasses);
                    statusElement.classList.add("bg-warning");
                    showDatepicker();
                    break;
                case "inactive":
                    statusElement.classList.remove(...statusClasses);
                    statusElement.classList.add("bg-danger");
                    hideDatepicker();
                    break;
                case "draft":
                    statusElement.classList.remove(...statusClasses);
                    statusElement.classList.add("bg-primary");
                    hideDatepicker();
                    break;
            }
        });

        $("#kt_ecommerce_add_product_status_datepicker").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i"
        });

        const showDatepicker = () => {
            datepicker.parentNode.classList.remove("d-none");
        };

        const hideDatepicker = () => {
            datepicker.parentNode.classList.add("d-none");
        };
    };

    const initializeMethodHandler = () => {
        const methodRadios = document.querySelectorAll('[name="method"][type="radio"]');
        const autoOptions = document.querySelector('[data-kt-ecommerce-catalog-add-category="auto-options"]');

        methodRadios.forEach((radio) => {
            radio.addEventListener("change", (event) => {
                if (event.target.value === "1") {
                    autoOptions.classList.remove("d-none");
                } else {
                    autoOptions.classList.add("d-none");
                }
            });
        });
    };

    const initializeDiscountOptionHandler = () => {
        const discountOptions = document.querySelectorAll('input[name="discount_option"]');
        const percentageDiscount = document.getElementById("kt_ecommerce_add_product_discount_percentage");
        const fixedDiscount = document.getElementById("kt_ecommerce_add_product_discount_fixed");

        discountOptions.forEach((option) => {
            option.addEventListener("change", (event) => {
                switch (event.target.value) {
                    case "2":
                        percentageDiscount.classList.remove("d-none");
                        fixedDiscount.classList.add("d-none");
                        break;
                    case "3":
                        percentageDiscount.classList.add("d-none");
                        fixedDiscount.classList.remove("d-none");
                        break;
                    default:
                        percentageDiscount.classList.add("d-none");
                        fixedDiscount.classList.add("d-none");
                        break;
                }
            });
        });
    };

    const initializeShippingHandler = () => {
        const shippingCheckbox = document.getElementById("kt_ecommerce_add_product_shipping_checkbox");
        const shippingOptions = document.getElementById("kt_ecommerce_add_product_shipping");

        shippingCheckbox.addEventListener("change", (event) => {
            if (event.target.checked) {
                shippingOptions.classList.remove("d-none");
            } else {
                shippingOptions.classList.add("d-none");
            }
        });
    };

    const initializeFormValidation = () => {
        let form = document.getElementById("kt_ecommerce_add_product_form");
        let submitButton = document.getElementById("kt_ecommerce_add_product_submit");

        let validator = FormValidation.formValidation(form, {
            fields: {
                product_name: {
                    validators: { notEmpty: { message: "Product name is required" } }
                },
                sku: {
                    validators: { notEmpty: { message: "SKU is required" } }
                },
                shelf: {
                    validators: { notEmpty: { message: "Shelf quantity is required" } }
                },
                price: {
                    validators: { notEmpty: { message: "Product base price is required" } }
                },
                tax: {
                    validators: { notEmpty: { message: "Product tax class is required" } }
                }
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "",
                    eleValidClass: ""
                })
            }
        });

        submitButton.addEventListener("click", (event) => {
            event.preventDefault();

            validator.validate().then((status) => {
                if (status === "Valid") {
                    submitButton.setAttribute("data-kt-indicator", "on");
                    submitButton.disabled = true;

                    setTimeout(() => {
                        submitButton.removeAttribute("data-kt-indicator");
                        Swal.fire({
                            text: "Form has been successfully submitted!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: { confirmButton: "btn btn-primary" }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit();
                            }
                        });
                    }, 2000);
                } else {
                    Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: { confirmButton: "btn btn-primary" }
                    });
                }
            });
        });
    };

    const initializeSummernote = () => {
        $('#service_description_editor').summernote({
            height: 300, // set the height of the editor
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    
        const form = document.getElementById('kt_ecommerce_add_product_form');
        form.addEventListener('submit', () => {
            // Update the textarea with the Summernote content
            $('#service_description_editor').val($('#service_description_editor').summernote('code'));
        });
    };    

    return {
        init: function () {
            initializeRepeater();
            initializeSelect2();
            initializeTagify();
            initializeDiscountSlider();
            initializeDropzone();
            initializeStatusHandler();
            initializeMethodHandler();
            initializeDiscountOptionHandler();
            initializeShippingHandler();
            initializeFormValidation();
            initializeSummernote();  // Call the Summernote initialization function here
        }
    };
}();

document.addEventListener("DOMContentLoaded", function () {
    KTAppEcommerceSaveProduct.init();
});
