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