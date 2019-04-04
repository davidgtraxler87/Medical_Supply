var cartSystem = (function () {

    var addToCart = function() {
        alert('Adding to cart');
        // Logic #2 will go here
    };


    var init = function() {
        $(document).on("click", ".addToCartBtn", addToCart);
    };

    return {
        init: init,
    }

}());

$(document).ready(function() {
    cartSystem.init();
});

let submit = $("#profile").submit();

$("#profile").empty();
