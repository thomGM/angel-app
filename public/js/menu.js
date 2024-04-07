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
});

$(document).ready(function(){
    $('#masculino').hover(function(){
        $('.submenu1').toggle();
    });
});

$(document).ready(function(){
    $('#conta').hover(function(){
        $('.submenu2').toggle();
    });
});