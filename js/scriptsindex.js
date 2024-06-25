// js/scripts.js
$(document).ready(function() {
    loadProducts();

    $("#toggleMenu").click(function() {
        $("#sideMenu").toggleClass("collapsed");
    });

    $("#closeMenu").click(function() {
        $("#sideMenu").toggleClass("collapsed");
    });
});

function loadProducts() {
    $.ajax({
        url: 'getProducts.php',
        type: 'GET',
        success: function(data) {
            $('#productTable').html(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('AJAX error: ' + textStatus + ' : ' + errorThrown);
        }
    });
}
