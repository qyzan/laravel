function check_agree(form) {
  if (form.agree.checked) {
    // alert("Your Register Succes, Click OK for Login tou our website")
    return true;
  } else if (!form.agree.checked) {
    alert("You must agree to the application agreement terms before continuing.");
  }
  return false;
}
