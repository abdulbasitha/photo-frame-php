


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
      <title>Xtrinia 2.0 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/croppie.css" rel="stylesheet" async="async" />
    <link href="css/style.css" rel="stylesheet" async="async" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="js/croppie.min.js" async="async"></script>
    <script src="js/app.js" async="async"></script>
    <script src="js/fb.js" async="async"></script>
  </head>
  <body>
    <div id="wrapper">
      <div id="content">
          <h1>Xtrinia 2.0 | Profile Frame Creator</h1>
        <div id="preview">
          <div id="crop-area">
            <img src="http://demos.subinsb.com/isl-profile-pic/image/person.png" id="profile-pic" />
          </div>
          <img src="frames/frame-1.png" id="fg" data-design="0" />
        </div>
        <p>
          <button id="download" disabled>Download Profile Picture</button>
          <button id="fb-set-pic" disabled>Set As <b>Facebook</b> Profile Picture</button>
        </p>
        <h2>Upload</h2>
        <input type="file" name="file" onchange="onFileChange(this)">


        <h2>Design</h2>
        <div id="designs">
          <img class="design active" src="frames/frame-0.png" data-design="0" />
          <img class="design" src="frames/frame-1.png" data-design="1" />
          <img class="design" src="frames/frame-2.png" data-design="2" />
        </div>

    </div>
  </body>
</html>