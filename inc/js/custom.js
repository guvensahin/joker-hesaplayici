/**
 * Created with JetBrains WebStorm.
 * User: Güven
 * Date: 07.03.2013
 * Time: 20:27
 * To change this template use File | Settings | File Templates.
 */



$(function(){


    addItemBox();
    addItemBox();



    $('a.deleteItemBox').live('click', function()
    {
        var itemBoxCount = $('div.itemBox').length;

        if (itemBoxCount > 2)
        {
            $(this).parent().remove();
        }
        else
        {
            alert('Sipariş veren en az 2 kişi olmalı.');
        }
    });



    // ücret girişi yapılan numeric(float) input kontrolü
    $('.partnerPriceInput').live('focus', function(){
        $(this).numeric();
    });


});



function addItemBox()
{
    $.ajax({
        type     : 'GET',
        url      : 'add-item-box.html',
        dataType : 'html',
        success  : function(data)
        {
            $('form#calcForm').append(data);
        }
    });
}





// hesapla butonuna basıldığında çalışır.
function calc()
{
    $.ajax({
        type     : 'POST',
        url      : 'calc.php',
        data     : $('form#calcForm').serialize(),
        dataType : 'html',
        success  : function(data)
        {
            $('div#myModal div#modalContent').html(data);
            $('div#myModal').modal('show');
        }
    });
}





















