$(function(){
    itog();
    $('.count').change(function(){
        var id=$(this).attr('data-id');
        var price = $('#price_'+id).text();
        var count = $(this).val();
        var summa =price * count;

        $('#summa_'+id).text(summa);

        var a = itog();
        console.log(a);
    });

    function itog() {
        var itog =Number(0);
        $('.summa').each(function(){
            itog +=Number( $(this).text());
        });
        $('#itog').text(itog);
        return itog;
    }
});
