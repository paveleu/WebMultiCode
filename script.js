function przelicz() {
    var val = document.getElementById("textarea_content").value;
    document.getElementById("con_md5").innerHTML = md5(val);
    document.getElementById("con_base64").innerHTML = btoa(val);
    document.getElementById("con_2base64").innerHTML = atob(val);
  }