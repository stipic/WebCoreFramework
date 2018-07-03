import 'owl.carousel';

$('document').ready(function () {
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: false,
        nav: true
    });

    $.each($('textarea[data-autoresize]'), function () {
        var offset = this.offsetHeight - this.clientHeight;

        var resizeTextarea = function (el) {
            $(el).css('height', 'auto').css('height', el.scrollHeight + offset);
        };
        $(this).on('keyup input', function () { resizeTextarea(this); }).removeAttr('data-autoresize');
    });


    $(document).on("click", ".account-type-choose button[data-type]", function (event) {
        event.preventDefault();

        var type = parseInt($(this).attr('data-type'));

        $(".account-type-choose button[data-type]").each(function (event) {
            $(this).removeClass('active');
        });
        $(this).addClass('active');
        $("#fos_user_registration_form_type").val(type);
    });


    // OPEN CLOSE DIALOGS

    var planDialog = document.querySelector("#plan-dialog");
    var overlay = document.querySelector(".bg-overlay");
    var paymentMethodDialog = document.querySelector("#payment-method-dialog");

    function openPlanDialog() {
        planDialog.classList.add("active");
        overlay.classList.add("active");
    };

    var closeDialog = function () {
        document.querySelector(".dialog.active").classList.remove("active");
        overlay.classList.remove("active");
    };

    var openPaymentMethodDialog = function () {
        paymentMethodDialog.classList.add("active");
        overlay.classList.add("active");
    };


    // DOTS DROPDOWN MENU

    document.querySelector(".more-dots").addEventListener("click", function () {
        if (document.querySelector(".dropdown-menu").classList.contains("active")) {
            document.querySelector(".dropdown-menu").classList.remove("active");
        }
        else {
            document.querySelector(".dropdown-menu").classList.add("active");
        }
    });

});
