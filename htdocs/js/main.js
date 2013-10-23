$(document).ready(function(){
    function scrolltop(item){
        $('body').animate({scrollTop: item.offset().top-100}, 500);
    }
    function nocolors(menuitem){
        menuitem.css('color', '');
    }
    
    $('#menu-req-doc').click(function(){
        scrolltop($('#req-doc'));//----------- SCROLL TO TOP OF SECTION
        nocolors($('#menu-req-doc, #menu-contact, #menu-payment, #menu-tc'));//------ RESET COLOR TO DEFAULT
        $(this).css('color', '#5CDEFF');//------------ SET MENU ITEM COLOR
    });
    $('#menu-contact').click(function(){
        scrolltop($('#contact'));//----------- SCROLL TO TOP OF SECTION
        nocolors($('#menu-req-doc, #menu-contact, #menu-payment, #menu-tc'));//------ RESET COLOR TO DEFAULT
        $(this).css('color', '#FC29A3');//------------ SET MENU ITEM COLOR
    });
    $('#menu-payment').click(function(){
        scrolltop($('#payment'));//----------- SCROLL TO TOP OF SECTION
        nocolors($('#menu-req-doc, #menu-contact, #menu-payment, #menu-tc'));//------ RESET COLOR TO DEFAULT
        $(this).css('color', '#ff6600');//------------ SET MENU ITEM COLOR
    });
    $('#menu-tc').click(function(){
        scrolltop($('#tc'));//----------- SCROLL TO TOP OF SECTION
        nocolors($('#menu-req-doc, #menu-contact, #menu-payment, #menu-tc'));//------ RESET COLOR TO DEFAULT
        $(this).css('color', '#fc0');//------------ SET MENU ITEM COLOR
    });
    
});
