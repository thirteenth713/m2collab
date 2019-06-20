$( document ).ready(function() {
    var active = 'cont_1';
    $('.link').click(function(e){
                e.preventDefault();
                var id = $(this).attr('href');
                $('.link').removeClass('activ');
                $(this).addClass('activ');
                    
                $('#'+active).fadeOut(100);
                setTimeout(function() {
                    $('#'+id).fadeIn(100);
                    $('.primator').slick('setPosition');


                    }, 100);

                if(id == 'cont_7'){
                    $('.yellow').css('color','#F6E200');

                }
                else{
                    $('.yellow').css('color','white');

                }


                $('.tablet-slider-block').fadeOut(100);
                $('#form-content').fadeOut(100);
                $('.second-content').fadeOut(100);
                $('.wrapper-sixth-content-slider').fadeOut(100);
            
                    
                    active = id;
                });

    var active2 = 'contm_1';
    $('.link-mob').click(function(e){
                e.preventDefault();
                var id = $(this).attr('href');
                $('.link-mob').removeClass('activm');
                $(this).addClass('activm');
                $('#'+active2).fadeOut(100);
                setTimeout(function() {
                
                    $('#'+id).fadeIn(100);
                    
                    if(id == 'contm_1'){
                        $('#hide-main-logo-slogan').css('display','none');

                    }
                    else{

                        $('#hide-main-logo-slogan').css('display','block');

                    }


                    $('.mobile-slider-second-content').slick('setPosition');
                    $('.primator-mob').slick('setPosition');


                    
                    }, 100);
                if(id == 'contm_7'){
                    $('#contact-telephone-open').css('display','block');
                    $('.main-telephone').css('display','none');
                }
                else{
                    $('.main-telephone').css('display','block');
                    $('#contact-telephone-open').css('display','none');

                }
                $('.second-content-mobile').fadeOut(100);
                $('.header-menu-mobile').slideUp();
                $('.wrapper-sixth-content-slider').fadeOut(100);
                $('.wrapper-sixth-content').fadeIn(100);
                $('#form-content').fadeOut(100);
                    
                    active2 = id;
                });
    /*---------------------------------Close navigation------------------------------------------------*/








    /* Навигация слайдера в блоке новостей мобильная и десктопная---------------------------------------------------------------*/
    $("#station-1").on('click', function(){
        $('.sixth-content').fadeOut(500);
        $('.sixth-content-mobile').fadeOut(500);



                


    setTimeout(function() {

        $('.wrapper-sixth-content-slider').fadeIn(500);
        $('.news-slider-in').slick('setPosition');
        $('.news-slider-in').slick('slickGoTo',0);
            
        }, 500);

        

        
    });


    $("#station-2").on('click', function(){
        $('.sixth-content').fadeOut(500);
        $('.sixth-content-mobile').fadeOut(500);



                


    setTimeout(function() {

        $('.wrapper-sixth-content-slider').fadeIn(500);
        $('.news-slider-in').slick('setPosition');
        $('.news-slider-in').slick('slickGoTo',1);
            
        }, 500);

        

        
    });


    $("#station-3").on('click', function(){
        $('.sixth-content').fadeOut(500);
        $('.sixth-content-mobile').fadeOut(500);



                


    setTimeout(function() {

        $('.wrapper-sixth-content-slider').fadeIn(500);
        $('.news-slider-in').slick('setPosition');
        $('.news-slider-in').slick('slickGoTo',2);
            
        }, 500);

        

        
    });


    $("#station-4").on('click', function(){
        $('.sixth-content').fadeOut(500);
        $('.sixth-content-mobile').fadeOut(500);



                


    setTimeout(function() {

        $('.wrapper-sixth-content-slider').fadeIn(500);
        $('.news-slider-in').slick('setPosition');
        $('.news-slider-in').slick('slickGoTo',3);
            
        }, 500);

        

        
    });

    $("#station-5").on('click', function(){
        $('.sixth-content').fadeOut(500);
        $('.sixth-content-mobile').fadeOut(500);



                


    setTimeout(function() {

        $('.wrapper-sixth-content-slider').fadeIn(500);
        $('.news-slider-in').slick('setPosition');
        $('.news-slider-in').slick('slickGoTo',0);
            
        }, 500);

        

        
    });

    $("#station-6").on('click', function(){
        $('.sixth-content').fadeOut(500);
        $('.sixth-content-mobile').fadeOut(500);



                


    setTimeout(function() {

        $('.wrapper-sixth-content-slider').fadeIn(500);
        $('.news-slider-in').slick('setPosition');
        $('.news-slider-in').slick('slickGoTo',1);
            
        }, 500);

        

        
    });











    /* Навигация слайдера в блоке новостей мобильная и десктопная-----------------------------------------------------------------------*/



    $('#burg').on('click',function(){
    $('.header-menu-mobile').slideToggle();
    });



    function func_Close(){
        $('.header-menu-mobile').slideUp();

    }



    $('#button-send-order').on('click',function(){
        $('#contm_4').fadeOut(500);
        setTimeout(function() {
        $('#form-content').fadeIn(500);


        }, 500);
    
    });




    $('#button-send-order2').on('click',function(){
        $('#cont_4').fadeOut(500);
        setTimeout(function() {
        $('#form-content').fadeIn(500);


        }, 500);
    
    });




    $('#first-but').on('click',function(){

        $('.first-content').fadeOut(100);

        setTimeout(function() {
            $('.second-content').fadeIn(100);


        }, 100);

    
    });


    $('.button-read-hide-tablet').on('click',function(){

        $('#cont_1').fadeOut(100);

        setTimeout(function() {
            $('.tablet-slider-block').fadeIn(100);
            $('.tablet-slider-second-content').slick('setPosition');


        }, 100);

    

        

    
    });

    $('.button-read-hide-mobile').on('click',function(){

        $('#contm_1').fadeOut(100);

        setTimeout(function() {
            $('.second-content-mobile').fadeIn(100);
                $('.mobile-slider-second-content').slick('setPosition');
                $('#hide-main-logo-slogan').css('display','block');


        }, 100);

    

        

    
    });



    if($(window).width() < 576) {
    $('#rez1').focus(function(){
        $('#popup__toggle').css('display','none');
        $('#social-box').css('display','none');


    });
    $('#rez1').blur(function(){
        $('#popup__toggle').css('display','block');
        $('#social-box').css('display','block');

    });
    $('#rez2').focus(function(){
        $('#popup__toggle').css('display','none');
        $('#social-box').css('display','none');

    });
    $('#rez2').blur(function(){
        $('#popup__toggle').css('display','block');
        $('#social-box').css('display','block');

    });
    $('#rez3').focus(function(){
        $('#popup__toggle').css('display','none');
        $('#social-box').css('display','none');

    });
    $('#rez3').blur(function(){
        $('#popup__toggle').css('display','block');
        $('#social-box').css('display','block');

    });
    $('#rez4').focus(function(){
        $('#popup__toggle').css('display','none');
        $('#social-box').css('display','none');

    });
    $('#rez4').blur(function(){
        $('#popup__toggle').css('display','block');
        $('#social-box').css('display','block');

    });


    } else {
        false;
    }



    if($(window).width() < 769) {

    $(".link"). removeClass("active");

    }
    else{
        false;
    }



    $('.mobile-second-content-prev').on('click', function() {
    $('.mobile-slider-second-content').slick('slickPrev');
    });






    /*---------------------------------------------------------
    Функционал онлайн записи 
    if($(window).width() > 576) {




    }
    else{
        false;
    }

    */




    jQuery(function($){
        $(document).mouseup(function (e){ // отслеживаем событие клика по веб-документу
            var block = $("#yclients-wrapper"); // определяем элемент, к которому будем применять условия (можем указывать ID, класс либо любой другой идентификатор элемента)
            if (!block.is(e.target) // проверка условия если клик был не по нашему блоку
                && block.has(e.target).length === 0) { // проверка условия если клик не по его дочерним элементам
                block.hide(); // если условия выполняются - скрываем наш элемент
            $('.vertical-decor').removeClass('hido');
        $('.vertical-decor').css('z-index','0');
            }
        });
    });





    function redirect(){
    window.location.href = "https://n102014.yclients.com/company:114264?";
    }

    if($(window).width() < 576) {

    let inp_but = document.getElementById('popup__toggle');
    inp_but.addEventListener('click',redirect);

    }
    else{
        
        $('#popup__toggle').click(function(){
        $('.yclients-wrapper').animate({width: 'toggle'});
        $('.vertical-decor').addClass('hido');
        $('.vertical-decor').css('z-index','5');

    });

    $('#close-icon-yclients').click(function(){
        $('.yclients-wrapper').animate({width: 'toggle'});
        $('.vertical-decor').removeClass('hido');
        $('.vertical-decor').css('z-index','0');

    });
    }
});