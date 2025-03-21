$('.opcao, .conta, .menuOp').hover(
    function() {
        $(this).addClass('hover');
    },
    function() {
        $(this).removeClass('hover');
    }
);

$(document).ready(function(){
    $('#feminino').hover(function(){
        $('.submenu').toggle();
    });
    $('#masculino').hover(function(){
        $('.submenu1').toggle();
    });
    $('#conta').hover(function(){
        $('.submenu2').toggle();
    });
    
    //Menu tela pequena
    $('#menu-icon').click(function(event) {
        $('#elementos').toggle();
        event.stopPropagation(); 
    });
    $(document).click(function (event) {
        //console.log(event.target);
        if ((!$(event.target).closest(".fa-chevron-down").length) && (!$(event.target).closest(".font").length) && !$(event.target).closest(".href").length) {
            $("#elementos").hide();
        }
    });
    
});
