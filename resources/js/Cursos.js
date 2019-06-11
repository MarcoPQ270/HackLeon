$(init);
var table = null;
var cursos = null;

function init(){
    // Configuración del DataTable
    table = $('#cur').DataTable({"aLengthMenu": 
           [[10,25,50,75,100],[10,25,50,75,100]],
           "iDisplaylength":15});

    //Llena el arrelo de cursos con la Información BD
    cargaCursos();      

    //Iniciliza la ventana Modal y la Validación
    $("#modalRegistro").modal();
    validateForm();

    // Clic del boton circular Agregar
    $("#add-record").on("click",function(){
        $("#modalRegistro").modal('open');
        $("#tit").focus();
    });
    
    // clic del boton de guardar
    $('#guardar').on("click",function(){
        $('#frm-cursos').submit();
    });
       
}

function validateForm(){
    $('#frm-cursos').validate({
        rules: {
            tit:{required:true,minlength:8, maxlength:60},
            descrip:{required:true, minlength:8, maxlength:126},
            costo:{required:true, number:true},         
        },
        messages: {
            tit:{required:"No puedes dejar este campo vacío",minlength:"Debes ingresar al menos 8 caracteres", maxlength:"No puedes ingresar más de 60 caracteres"},
            descrip:{required:"No puedes dejar este campo vacío",minlength:"Debes ingresar al menos 8 caracteres", maxlength:"No puedes ingresar más de 126 caracteres"},
            costo:{required:"Debes ingresar un costo válido",number:"Este campo debe ser numérico"},             
        },
        errorElement: "div",
        errorClass: "invalid",
        errorPlacement: function(error, element){
            error.insertAfter(element)                
        },
        submitHandler: function(form){
            saveData();
        }
    });
}

function cargaCursos(){
    var parametros = "";
    $.ajax({
        type:"post",
        url:"llenaArrayCursos.php",
        dataType:'json',
        data:parametros,
        success:function(respuesta){
            if (respuesta['status']){
                cursos=respuesta['data'];
            } else{
                cursos=null;
            }
        }
    });
}

function saveData(){
    var id = $("#pk").val(); 
    var boton = "";
    if (id == "0")
        boton = "&boton=Agregar";
    else
        boton = "&boton=Actualizar";
    var parametros='pk='+ id + "&tit=" + $("#tit").val() +
                   "&descrip=" + $("#descrip").val() + 
                   "&costo=" + $("#costo").val()+ boton;
    $.ajax({
        type:"post",
        url:"actCurso.php",
        dataType:'json',
        data:parametros,
        success: function(respuesta){

        }
    });
}

