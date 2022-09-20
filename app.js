$(function(){

    $('.moon').on('click', function(){
        $('.moon').addClass('off');
        $('.sun').removeClass('off');
        $('body').addClass('dark-mode');
    })


    $('.sun').on('click', function(){
        $('.sun').addClass('off');
        $('.moon').removeClass('off');
        $('body').removeClass('dark-mode');
    })

})

