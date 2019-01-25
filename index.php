<!DOCTYPE html>
<html lang="pl">

  <head>

     <meta charset="utf-8">
     <title>WebMultiCode</title>

     <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
     <script src="ext/code.js"></script>
     <link rel="stylesheet" href="style.css">
     <script src="script.js"></script>

  </head>
  <body>
    <div id='bod'>
    <div id = 'text'> <textarea rows='4' cols='100' id='textarea_content'></textarea> </div>
    <div id = 'buttonproces'> <button onclick="przelicz()">Przelicz</button> </div>

    <div class = "content">
        <div class="content_row">
            TEXT => MD5 <p id="con_md5" class='c'></p>
        </div>
        <div class="content_row">
            TEXT => BASE64 <p id="con_base64" class='c'></p>
        </div>
        <div class="content_row">
            BASE64 => TEXT <p id="con_2base64" class='c'></p>
        </div>
        <div class="content_row">
            TEXT => SHA1 <p id="con_sha1" class='c'></p>
        </div>
        <div class="content_row">
            TEXT => SHA256 <p id="con_sha256" class='c'></p>
        </div>
        <div class="content_row">
            TEXT => UrlCode <p id="con_urlcode" class='c'></p>
        </div>
        <div class="content_row">
            UrlCode => TEXT <p id="con_codeurl" class='c'></p>
        </div>
    </div>
</div>
  </body>

</html>