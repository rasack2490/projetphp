function show_or_hide_password(input_id) {
    var x = document.getElementById(input_id);
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }