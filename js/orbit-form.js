
/* CAMPO FORMULARIO ORBIT OCULTO */
$('#departamento input[type="checkbox"]').change(function() {
  
  let name = this.value;
  
  $('[data-label=' + name + ']').css('display', this.checked ? '' : 'none');

});
/* CAMPO FORMULARIO ORBIT OCULTO End */