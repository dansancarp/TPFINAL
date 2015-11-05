function MostrarListadoAuto()
{          
    var miAjax = $.ajax({
              method: "POST",
              url: "nexo.php",
              data:{                
                quehago:"MostrarListadoAuto"
              },
              success:function(resultado)
              {
                $("#content").html(resultado);
              }
          });
}

function MostrarListadoPagos()
{          
    var miAjax = $.ajax({
              method: "POST",
              url: "nexo.php",
              data:{                
                quehago:"MostrarListadoPagos"
              },
              success:function(resultado)
              {
                $("#content").html(resultado);
              }
          });
}

function MostrarListadoUsuarios()
{          
    var miAjax = $.ajax({
              method: "POST",
              url: "nexo.php",
              data:{                
                quehago:"MostrarListadoUsuarios"
              },
              success:function(resultado)
              {
                $("#content").html(resultado);
              }
          });
}

