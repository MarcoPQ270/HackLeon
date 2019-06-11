$(init)
function init(){
    $("#btnlogin").on("click", function(){
       $("#frmlogin").validate({
        rules:{
          username:{required:true},
          psw:{required:true},
        },
        messages:{
          username:{required:'Este campo es requerido'},
          psw:{required:'Este campo es requerido'},
        },
        errorElement:"div",
        errorClass:"invalid",
        errorPlacement:function(error,element){
          error.insertAfter(element)
        },
        submitHandler:function(form){
          savedata();
        }
       })
    });
}
function savedata(){
  alert("Guardando");
}