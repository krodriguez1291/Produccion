$(document).ready(function(){
    Biblioteca.validacionGeneral('form-general');
    $('#icono').on('blur',function(){
        $('#mostra-icono').removeClass().addClass('fa fa-w '+$(this).val());
    });
});