function deleteAjax(){
    $(document).ready(function(){
        var id = [];
        $(':checkbox:checked').each(function(i){
            id[i] = $(this).val();
                $.ajax({
                url:'assets/app/delete.php',
                method:'POST',
                data:{productid:id},
                success:function() {
                for(var i=0; i<id.length; i++) {
                    $('div#'+id[i]).css('background-color', '#ccc');
                    $('div#'+id[i]).fadeOut('slow');
                }
                }
            });
        });
    });
}

$(document).ready(function(){

    $("#sku").keyup(function(){

    var sku = $(this).val().trim();

    if(sku != ''){

        $.ajax({
            url: 'assets/app/checkSku.php',
            type: 'POST',
            data: {product_sku:sku},
            success: function(response){
                $("#sku_response").html(response);
                if(response.trim() == "") {
                    $("#save").show();
                } else {
                    $("#save").hide();
                }
            }
        });
    } else {
        $("#sku_response").html("");
    }

    });

});