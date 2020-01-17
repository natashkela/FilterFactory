$(document).ready(function(){
    $('.add-to-cart').on('click', function(){
        addToCart($(this).data('filter-id'), $(this).data('filter-name'));
    });

    function addToCart(filter_id, filter_name){
        var oldItems = JSON.parse(localStorage.getItem('itemsArray')) || [];
        var newItem = {
            'filter_id': filter_id,
            'filter_name': filter_name
        };
        oldItems.push(newItem);
        localStorage.setItem('itemsArray', JSON.stringify(oldItems));
    }
});