function validate() {
  var email = document.forms["form"]["companyEmail"].value;
  var fname = document.forms["form"]["firstName"].value;
  var lname = document.forms["form"]["lastName"].value;
  var cname = document.forms["form"]["companyName"].value;
  var pwd = document.forms["form"]["password"].value;
  var pwdRpt = document.forms["form"]["passwordConfirm"].value;

  //firstName validation check
  if (fname == "") {
    document.getElementById("fnameErr").innerHTML =
      '<div class="alert alert-danger" role="alert">First name cannot be empty!</div>';
    return false;
  } else {
    var re = /^[a-zA-Z]/;
    var x = re.test(fname);

    if (fname != "" && !x) {
      document.getElementById("fnameErr").innerHTML =
        '<div class="alert alert-danger" role="alert">Choose a proper first name!</div>';
      return false;
    }
    if (fname != "" && x) {
      document.getElementById("fnameErr").innerHTML = "";
    }
  }

  //lastName validation check
  if (lname == "") {
    document.getElementById("lnameErr").innerHTML =
      '<div class="alert alert-danger" role="alert">Last name cannot be empty!</div>';
    return false;
  } else {
    var re = /^[a-zA-Z]/;
    var x = re.test(lname);

    if (!x) {
      document.getElementById("lnameErr").innerHTML =
        '<div class="alert alert-danger" role="alert">Choose a proper last name!</div>';
      return false;
    }
    if (lname != "") {
      document.getElementById("lnameErr").innerHTML = "";
    }
  }

  //company validation check
  if (cname == "") {
    document.getElementById("companyNameErr").innerHTML =
      '<div class="alert alert-danger" role="alert">Company name cannot be empty!</div>';
    return false;
  }
  if (cname != "") {
    document.getElementById("companyNameErr").innerHTML = "";
  }

  //email validation check
  if (email == "") {
    document.getElementById("emailErr").innerHTML =
      '<div class="alert alert-danger" role="alert">Company email cannot be empty!</div>';
    return false;
  } else {
    var re =
      /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    var x = re.test(email);

    if (!x) {
      document.getElementById("emailErr").innerHTML =
        '<div class="alert alert-danger" role="alert">Choose a proper company email!</div>';
      return false;
    }
    if (email != "") {
      document.getElementById("emailErr").innerHTML = "";
    }
  }

  //password validation check
  if (pwd == "") {
    document.getElementById("pwdErr").innerHTML =
      '<div class="alert alert-danger" role="alert">Password cannot be empty!</div>';
    return false;
  } else {
    if (pwd.length < 8) {
      document.getElementById("pwdErr").innerHTML =
        '<div class="alert alert-danger" role="alert">Password must be at least 8 characters!</div>';
      return false;
    }
    if (pwd != "") {
      document.getElementById("pwdErr").innerHTML = "";
    }
  }

  //password repeat validation check
  if (pwdRpt == "") {
    document.getElementById("pwdRptErr").innerHTML =
      '<div class="alert alert-danger" role="alert">Please repeat your password!</div>';
    return false;
  } else {
    if (pwdRpt != pwd) {
      document.getElementById("pwdRptErr").innerHTML =
        '<div class="alert alert-danger" role="alert">Passwords do not match!</div>';
      return false;
    }
  }
}
