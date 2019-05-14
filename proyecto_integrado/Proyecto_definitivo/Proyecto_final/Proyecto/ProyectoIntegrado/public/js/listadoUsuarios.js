var type = "";
var busqueda="";


$(document).ready(function()
{
  //para cojer el valor inicial para el Update
  $( 'input').focusin(function()
  { //valor inical del input
    busqueda=$(this).attr('value')

    $('input').focusout(function()
    {
      type = $(this).attr('name');

      if (type != "re_contrasenya")
      {
              var envio = $(this).val();
              var dataString = 'busqueda='+type+"-"+envio;
              //comprobamos el nombre Inicial y el actual antes de comprobarDatos
              //si es el mismo no hacemos nodoImagenEditar
              if(busqueda != envio)
              if(type == "NIF"  || type == "Email" )
              {
                console.log(dataString);
                //console.log(busqueda+"-----"+envio);
                $.ajax({
                    type: "POST",
                    url: "../../src/seguridad/comprobarDatos.php",
                    data: dataString,
                    success: function(data)
                    {
                      console.log("Devuelto:"+data);
                        if(data == 0 && $("#"+type).val().length > 0)
                        {
                          document.getElementById(type).style.borderColor = "green";
                          document.getElementById("registro").disabled = false;
                        }
                          else if(data == 1 && $("#"+type).val().length > 0)
                          {
                            document.getElementById(type).style.borderColor = "red";
                            document.getElementById("registro").disabled = true;
                          }
                    }
                });

            }
          }
      });
    });
  });
