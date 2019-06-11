//Select
document.addEventListener('DOMContentLoaded', function() {
  var options={}
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems, options);
});
//datepicker
document.addEventListener('DOMContentLoaded', function () {
  var options = {
  defaultDate: new Date(),
  setDefaultDate: false
};
  var elems = document.querySelector('.datepicker');
  var instance = M.Datepicker.init(elems, options);
});
//sidnav
document.addEventListener('DOMContentLoaded', function() {
  var options={}
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, options);
});
//menu dezplegable

//boton flotante
document.addEventListener('DOMContentLoaded', function() {
  var options={}
  var elems = document.querySelectorAll('.fixed-action-btn');
  var instances = M.FloatingActionButton.init(elems, options);
});
//Paralaje
document.addEventListener('DOMContentLoaded', function() {
  var options={};
  var elems = document.querySelectorAll('.parallax');
  var instances = M.Parallax.init(elems, options);
});
//Plegable
document.addEventListener('DOMContentLoaded', function() {
  var options={};
  var elems = document.querySelectorAll('.collapsible');
  var instances = M.Collapsible.init(elems, options);
});
//Menu dezplegable
document.addEventListener('DOMContentLoaded', function() {
  var options={};
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems, options);
});
//Ventana modal
//Iniciliza la ventana Modal y la Validación
document.addEventListener('DOMContentLoaded', function() {
  var options={};
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems, options);
});
//$("#ventanamodal").modal();
//validateForm();
//click
//$("#btnenviar").on('click',function(){
  //$("#ventanamodal").modal('open');
//});
//Slider
document.addEventListener('DOMContentLoaded', function() {
  var options={};
  var elems = document.querySelectorAll('.slider');
  var instances = M.Slider.init(elems, options);
});

