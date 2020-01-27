var price = 5.95;
// price checked
$(document).on("click", "#price-4-weeks", function() {
    price = 5.95;
});
$(document).on("click", "#price-12-weeks", function() {
    price = 12.95;
});
$(document).on("click", "#price-1-year", function() {
    price = 19.95;
});
// end price checked

paypal
    .Buttons({
        style: {
            shape: "pill",
            size: "small",
            color: "blue",
            layout: "vertical",
            label: "paypal"
        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [
                    {
                        amount: {
                            value: price
                        }
                    }
                ]
            });
        },
        onApprove: function(data, actions) {
            $(".diet-step-10").addClass("disabled_button");
            return actions.order.capture().then(function(details) {
                var url = window.location.href;
                var emailaddress = localStorage.getItem("emailaddress");
                var material = localStorage.getItem("material");
                material = material.split(",");
                var locale = $("html").attr("lang");
                var cal = localStorage.getItem("cal");
                profile = localStorage.getItem("profile");
                profile = profile.split(",");
                $.ajax({
                    url: "/savedietplan",
                    method: "post",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr("content"),
                        cal: cal,
                        material: material,
                        profile: profile,
                        locale: locale,
                        link: url,
                        email: emailaddress,
                        price: price
                    },
                    success: function(response) {
                        alert("success! Please check your email.");
                        $(".diet-step-10").removeClass("disabled_button");
                    }
                });
            });
        }
    })
    .render("#paypal-button-container");

// Create a Stripe client.
var stripe = Stripe("pk_test_MA89Ze5zPpGdITTlApUE5PFl00L5L4v5it");

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
    base: {
        color: "#32325d",
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: "antialiased",
        fontSize: "16px",
        "::placeholder": {
            color: "#aab7c4"
        }
    },
    invalid: {
        color: "#fa755a",
        iconColor: "#fa755a"
    }
};

// Create an instance of the card Element.
var card = elements.create("card", { style: style });

// Add an instance of the card Element into the `card-element` <div>.
card.mount("#card-element");

// Handle real-time validation errors from the card Element.
card.addEventListener("change", function(event) {
    var displayError = document.getElementById("card-errors");
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = "";
    }
});

// Handle form submission.
$("#payment-form")
    .unbind("submit")
    .bind("submit", function(event) {
        event.preventDefault();
        $("#loading_button").addClass("fa fa-spinner fa-spin");
        $("#stripe_payment_button").addClass("disabled_button");
        stripe.createToken(card).then(function(result) {
            if (result.error) {
                $("card-errors").textContent = result.error.message;
                $("#loading_button").removeClass("fa fa-spinner fa-spin");
                $("#stripe_payment_button").removeClass("disabled_button");
            } else {
                // Send the token to your server.

                // stripeTokenHandler(result.token);
                var url = window.location.href;
                var emailaddress = localStorage.getItem("emailaddress");
                var material = localStorage.getItem("material");
                material = material.split(",");
                var locale = $("html").attr("lang");
                var cal = localStorage.getItem("cal");
                profile = localStorage.getItem("profile");
                profile = profile.split(",");
                $.ajax({
                    url: "/stripepayment",
                    method: "post",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr("content"),
                        cal: cal,
                        material: material,
                        profile: profile,
                        locale: locale,
                        link: url,
                        email: emailaddress,
                        stripeToken: result.token.id,
                        price: price
                    },
                    success: function(response) {
                        $("#paypal-button-container").show();
                        $("#loading_button").removeClass(
                            "fa fa-spinner fa-spin"
                        );
                        $("#stripe_payment_button").removeClass(
                            "disabled_button"
                        );
                        document.getElementById(
                            "modal_stripe_pay"
                        ).style.display = "none";
                        alert("success! Please check your email.");
                    }
                });
            }
        });
    });
