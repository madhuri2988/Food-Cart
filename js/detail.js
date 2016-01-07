$(document).ready(function() {
    var product_id;
    $(".open-detail").click(function() {
         var id = $(this).attr('id');
        
 
        $(".detail-ontop").show();
        $("#detail").animate({right: "0px"}, 500);

        // pass the variable to the check part
         product_id = $(this).closest("li").find(".product-id").html();
       
        //$(".detail-product-id").html(product_id);
return false;
        // check out 
      
    });
$(".check-out-btn").click(function(event){
   var comments = $("#detail-bottom").find("#comments").val();
   var size= $('input:radio[name=size]:checked').val();
    var spicy= $('input:radio[name=spicy]:checked').val();
    comments=comments.concat("-",size,"-",spicy);
      var location = "add_to_cart.php?id=" + product_id+"&comm="+comments;
        
        $(".check-out-btn").attr("href", location);
      
  

});
    $(".detail-close").click(function() {
        $(".detail-ontop").hide();
        $("#detail").animate({right: "-330px"}, 500);
        return false;
    });
    
        $('#faqs h3').each(function() {
		var tis = $(this), state = false, answer = tis.next('div').slideUp();
		tis.click(function() {
			state = !state;
			answer.slideToggle(state);
			tis.toggleClass('active',state);
		});
	});

        function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(37.349952, -121.940608),
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
 });
