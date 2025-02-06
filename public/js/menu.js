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
    $('#menu-icon').click(function() {
        $('#elementos').toggle();
      });
});
