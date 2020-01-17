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

    $('.fas.fa-star').on('mouseover', function(){
        var index = $(this).index();
        $(this).parent().find('.fas.fa-star').removeClass('active');
        for(var i=0;i<=index;i++){
            var star = $(this).parent().find('.fas.fa-star')[i];
            $(star).addClass('active');
        }
    });

    var starAmount = 0;
    $('.fas.fa-star').on('click', function(){
        var index = $(this).index();
        $(this).removeClass('active');
        starAmount = index+1;
        $(this).closest('.ratings').data('rating', starAmount);
        for(var i=0;i<=index;i++){
            var star = $(this).parent().find('.fas.fa-star')[i];
            $(star).addClass('active');
        }
    });

    $('.ratings').on('mouseout', function(){
        $(this).find('.fas.fa-star').removeClass('active');
        var rating = $(this).data('rating');
        if(rating>0){
            for(var i=0;i<rating;i++){
                var star = $(this).find('.fas.fa-star')[i];
                $(star).addClass('active');
            }
        }
        else{
            $(this).parent().find('.fas.fa-star').removeClass('active');
        }
    });
});