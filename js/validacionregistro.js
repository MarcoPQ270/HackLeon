$(init)
function init(){
    $("#btnregister").on("click", function(){
       $("#frmregistro").validate({
        rules:{
          username:{required:true,minlength:8},
          mail:{required:true, email:true},
          psw:{required:true,minlength:8,maxlength:25},
          cpsw:{required:true,minlength:8,maxlength:25},
          fecha:{required:true}
        },
        messages:{
          username:{required:'este campo es requerido',minlength:'Minimo 8 caracteres'},
          psw:{required:'Este campo es requerido',minlength:"Minimo 8 caracteres",maxlength:'Maximo 25 caracteres'},
          mail:{required:'Este campo es requerido', email:'No es un correo valido'},
          cpsw:{required:'Este campo es requerido',minlength:"Minimo 8 caracteres",maxlength:'Maximo 25 caracteres'},
          fecha:{required:'este campo es requerido'}
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