/**
 * Created with JetBrains WebStorm.
 * User: Güven
 * Date: 07.03.2013
 * Time: 20:27
 * To change this template use File | Settings | File Templates.
 */


$(function ()
{
    addItemBox();
    addItemBox();
});


function addItemBox()
{
    $.ajax({
        type     : 'GET',
        url      : 'add-item-box.html',
        dataType : 'html',
        success  : function(data)
        {
            $('form').append(data);
        }
    });
}


function deleteItemBox(element)
{
    if ($('div.form-row').length > 2)
    {
        $(element).parent().parent().remove();
    }
    else {
        alert('Sipariş veren en az 2 kişi olmalı.');
    }
}


// hesapla butonuna basıldığında çalışır.
function calc()
{
    $.ajax({
        type     : 'POST',
        url      : 'calc.php',
        data     : $('form').serialize(),
        dataType : 'html',
        success  : function(data)
        {
            $('.modal div#modalContentResult').html(data);
            $('.modal').modal('show');
        }
    });
}





















