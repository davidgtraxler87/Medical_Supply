var cartSystem = (function () {

    var addToCart = function(e) {
        e.preventDefault();
        // Logic #2 will go here
        $btn = $(e.target);
        var $quantityInput = $(e.target)
            .parent()
            .prev()
            .children('.quantity');
        var equipmentId = $quantityInput.attr('id');
        var quantity = $quantityInput.val();

        if (quantity <= 0) {
            return;
        }

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "addToCart",
            data: { equipmentId: equipmentId, quantity: quantity }
        })
            .done(function( result ) {
                if (result.success) {
                    alert( "Data Saved! ");
                    // Disable the button
                    $btn.attr('disabled', true);
                    $('#cartBtn').show();
                } else {
                    alert('Failed');
                }
            });
    };

    var checkIfProductInCart = function() {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "GET",
            url: "checkCart",
        })
            .done(function( result ) {
                if (result.success) {
                    $('#cartBtn').show();
                } else {
                    $('#cartBtn').hide();
                }
            });
    };

    var init = function() {
        $(document).on("click", ".addToCartBtn", addToCart);
        checkIfProductInCart();
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
