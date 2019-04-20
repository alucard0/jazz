function validateEmail(email) {
  const emailRegex = /(.+.*@.+.*\..+.*)/;
  if (email.match(emailRegex)) return true;
  return false;
}

function validateRequiredFileds(form) {
  let isValid = false;
  $(form)
    .find("input")
    .each(function() {
      if ($(this).prop("required") && $(this).val().length === 0) {
        $(this)
          .siblings(".error")
          .text("Campo requerido");
        $(this)
          .siblings(".error")
          .show();
        $(this).addClass("input-text--error");
        isValid = false;
      } else {
        $(this)
          .siblings(".error")
          .hide();
        isValid = true;
        $(this).removeClass("input-text--error");
      }
    });
  return isValid;
}

function validateArray(array,element,errorText){
  if(array.length>0){
    $(element).siblings(".error")
    .hide();
    return true
  }
  else{
    $(element)
        .siblings(".error")
        .show();
      $(element)
        .siblings(".error")
        .text(errorText);
        return false;
  }
}

function notifications (text, type){
  let {information,currentClass} = ""

  switch (type) {
    case 'success':
        information= '<strong>¡Éxito!</strong> '
        $('.alert').addClass( "alert-success" )
        currentClass = "alert-success"
        break;
    case 'info':
        information= '<strong>¡Información!</strong> '
        $('.alert').addClass( "alert-info" );
        currentClass = "alert-info"
        break;
    case 'warning':
        information= '<strong>¡Advetrencia!</strong> '
        $('.alert').addClass( "alert-warning" );
        currentClass = "alert-warning"
        break;
    case 'error':
        information= '<strong>¡Érror!</strong> '
        $('.alert').addClass( "alert-danger" );
        currentClass = "alert-danger"
        break;
}
  information+=text;
  
  $('.alert p.information').html(information)
  $('.alert').fadeIn('slow');
  
  $(".alert").delay(3000).fadeOut("slow", function() {
    $(this).removeClass(currentClass);
  });

}

function validarReservation(){
  if (validateRequiredFileds("#reservations-form")) {

      if (validateEmail($("#email").val())) {
    
              $("#email").removeClass("input-text--error")
              $("#name").removeClass("input-text--error")
              $("#mobile").removeClass("input-text--error")

              const email = $("#email").val();
              const name = $("#name").val();
              const mobile = $("#mobile").val();
              const show =$("#show").val();
              const dateTime =$("#date-time").val();
              const clients =$("#clients").val();
              const table =$("#table").val();

              let loginData = {
              "email": email,
              "name": name,
              "mobile": mobile,
              "show": show,
              "dateTime": dateTime,
              "clients": clients,
              "table": table
             }
              $.ajax({
              type: "POST",
              url: "controller/controller-CreateReservation.php",
              data: JSON.stringify(loginData),
              contentType: "application/json; charset=utf-8",
              dataType: "json",
              success: function(data) {
              //$("#login-form").text("Reservación registrada")
              },
              error: function(errMsg) {
               console.error(errMsg);
              $("#login-form").siblings(".error").text(errMsg)
              }
          });
          }
          else {
           $("#email").siblings(".error").show()
           $("#email").siblings(".error").text("Ingresa un correo electrónico válido")
           $("#email").addClass("input-text--error")
        }
  }
}

function llenarMesas(){
  const no_table = $("#clients").val();
  const fecha_Hr = $("#date-time").val();
  let loginData = {
    "no_people": no_table
  }
 $.ajax({
    type: "POST",
    url: "controller/controller-GetListTable.php",
    data: JSON.stringify(loginData),
    contentType: "application/json; charset=utf-8",
    dataType: "json",
    success: function(data) {
        $("#table").find('option').remove();
        $.each(data, function(id, mesa){
            $("#table").append('<option value="'+mesa.id_table+'">'+mesa.no_table+'</option>');
         });
    },
    error: function(errMsg) {
        console.error(errMsg);
        $("#login-form").siblings(".error").text(errMsg)
    }
  });
}
