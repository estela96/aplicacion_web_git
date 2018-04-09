
/*Cuando seleccionemos la clase toggle (crear usuario) nos mostrará el formulario de nuevo usuario*/
$('.toggle').click(function(){
    $('.formulario').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    }, "slow");
});