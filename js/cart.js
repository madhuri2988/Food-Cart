$(document).ready(function(){
    $('select[name="dropdown"]').change(function(){
        var id = $(this).closest('tr').find('.product-id').text();
        var name = $(this).closest('tr').find('.product-name').text();
        var updatedquantity = $(this).closest('tr').find('select').val();
        console.log("aaa", id, name, updatedquantity);
        window.location = "update_quantity.php?item_to_adjust=" + id + "&name=" + name + "&updatedquantity=" + updatedquantity;
        return false;
    });
     $('#promo-form').submit(function(e){
         
         $('#coupon').hide();
     });
     
    
});
