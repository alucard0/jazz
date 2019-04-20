jQuery(function($) {

    $("#btnEnviar").click(function() {
        validarReservation();
    });

});

function validarReservation(){
    if (validateRequiredFileds("#reserveForm")) {
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
