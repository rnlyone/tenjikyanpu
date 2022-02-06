
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Offline</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <meta name="theme-color" content="#3f51b5">
    <link rel="manifest" href="/manifest.json">
    <style>
    *{margin:0;padding:0;}
    body{font-family:arial;box-sizing:border-box;overflow:hidden;}
    #loader{width:100vw;height:100%;display:flex;justify-content: center;align-items:center;position:absolute;}
    #spinner{width:40px;height:40px;border-left:7px solid #004f8f; #004f8f;border-right:7px solid transparent;border-bottom:7px solid #004f8f;border-top:7px solid #004f8f;border-radius:50%;animation:rotate 1s infinite forwards;}
    @keyframes rotate{
      from{}
      to{transform:rotate(360deg);}
    }
    #wrapper{width:100vw;height:100%;position:fixed;top:0;left:0;right:0;bottom:0;animation:err 0.5s;
    background:rgba(0,0,0,0.85);}
    @keyframes err{
      from{background:#fff}
      to{background:rgba(0,0,0,0.85);}
    }
      #err-div{display:flex;justify-content:space-between;align-items:center; background:#fff;padding:8px;box-sizing:border-box;border-radius:10px 10px 0px 0px;position:fixed;bottom:0;left:0;right:0;z-index:99;animation:popup 0.5s;overflow:hidden}
      @keyframes popup {
        from{bottom:-100%}
        to{bottom:0}
      }

      #err-text h1{font-size:20px;user-select:none;animation:scale 0.95s}
      #err-text p{font-size:13px;user-select:none;animation:scale 0.9s}
      #ok{background:dodgerblue;color:#fff;border:none;outline:none;padding:8px 23px;border-radius:15px;box-shadow:1px 1px 2px 1px rgba(0,0,0,0.2);margin:10px 0px;font-weight:600;animation:scale 1s}
      #ok:hover,#ok:focus{outline:none;border:none;transform:scale(0.95);box-shadow:1px 1px 2px 1px rgba(0,0,0,0.0)}
      #img{animation:scale 1s;}
      @keyframes scale {
        from{transform:scale(0.7)}
        to{transform:scale(1)}
      }
      #img img{width:190px;user-select:none;pointer-events:none;transform:translate(30px,-12px)scale(1.4)}
    </style>
  </head>
<body>
  <div id="loader"><div id="spinner"></div></div>
  <div id="wrapper">
    <div id="err-div">
    <div id="err-text">
    <h1>Layanan sedang diperbaiki.</h1>
    <p>Jangan panik, mohon tunggu sebentar dan kamu akan segera menikmati layanan kembali</p>
    <button type="button" onClick="window.location.reload();"; id="ok">OK</button>
    </div>
    <div id="img">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYf3sSvk-re7a8IyKmZMZrSGZHn9JXZehwyg&usqp=CAU"/>
    </div>
  </div>
  </div>
</body>
</html>
