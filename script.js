function przelicz() {
    var val = document.getElementById("textarea_content").value;
    document.getElementsByClassName('c').innerHTML = '';
    document.getElementById("con_md5").innerHTML = md5(val);
    document.getElementById("con_base64").innerHTML = btoa(val);
    document.getElementById("con_sha1").innerHTML = SHA1(val);
    document.getElementById("con_sha256").innerHTML = SHA256(val);
    document.getElementById("con_urlcode").innerHTML = encodeURIComponent(val);
    document.getElementById("con_codeurl").innerHTML = decodeURIComponent(val);
    document.getElementById("con_2base64").innerHTML = atob(val);
  }