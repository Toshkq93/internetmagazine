/* Cart */
$('body').on('click', '.item_add', function (e){
    e.preventDefault();
    let id = $(this).data('id'),
        qty = $('.quantity input').val() ? $('.quantity input').val() : 1,
        mod = $('.available select').val();
    $.ajax({
       url: '/cart/add',
        data: {id: id, qty: qty, mod: mod},
        type: 'GET',
        success: function (res){
           showCart(res);
        },
        error: function (){
           alert('Ошибка! попробуйте позже');
        }
    });
});

$('#cart .modal-body').on('click', '.del-item', function (){
    let id = $(this).data('id');
    $.ajax({
       url: 'cart/delete',
       data: {id: id},
       type: 'GET',
       success: function (res){
         showCart(res);
       },
       error: function (){
           alert('Error!');
       }
    });
});

function showCart(cart){
    if ($.trim(cart) == '<h3>Корзина пуста</h3>'){
        $('#cart .modal-footer a, #cart .modal-footer .btn-danger').css('display', 'none');
    }else{
        $('#cart .modal-footer a, #cart .modal-footer .btn-danger').css('display', 'inline-block');
    }
    $('#cart .modal-body').html(cart);
    $('#cart').modal();
    if ($('.cart-sum'). text()){
        $('.simpleCartTotal').html($('#cart .cart-sum').text());
    }else{
        $('.simpleCartTotal').text('Пустая корзина');
    }
}

function getCart(){
    $.ajax({
        url: '/cart/show',
        type: 'GET',
        success: function (res){
            showCart(res);
        },
        error: function (){
            alert('Ошибка! попробуйте позже');
        }
    });
}

function clearCart(){
    $.ajax({
        url: '/cart/clear',
        type: 'GET',
        success: function (res){
            showCart(res);
        },
        error: function (){
            alert('Ошибка! попробуйте позже');
        }
    });
}

/* Currency */
$('#currency').change(function (){
    window.location = '/currency?curr=' + $(this).val();
});

/* Modification product's */
$('.available select').change(function (){
   let modId = $(this).val();
   size = $(this).find('option').filter(':selected').data('title');
   price = $(this).find('option').filter(':selected').data('price');
   baseprice = $('#base-price').data('base');
    if (price){
        $('#base-price').text(price.toFixed(2) + symbol);
    }else{
        $('#base-price').text(baseprice.toFixed(2) + symbol);
    }
});