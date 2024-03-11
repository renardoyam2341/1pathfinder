<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Video Conference</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href='https://fonts.googleapis.com/css?family=Sarabun' rel='stylesheet'>
</head>
<body>

    <header>
        <div class="logo-title">
            <img src="https://www.uc-bcf.edu.ph/assets/images/uc_logo_green_ext_h150.png" alt="uc_logo" title="University of Cordilleras">
            <h1>PathFinder Video Conference</h1>
            <link href='https://fonts.googleapis.com/css?family=Sarabun' rel='stylesheet'>
        </div>
    </header>

    <button id="join-btn">Join Stream</button>

    <div id="stream-wrapper">
        <div id="video-streams"></div>

        <div id="stream-controls">
            <button id="leave-btn">Leave Stream</button>
            <button id="mic-btn">Mic On</button>
            <button id="camera-btn">Camera on</button>
        </div>
    </div>
    
</body>
<script src="https://download.agora.io/sdk/release/AgoraRTC_N.js"></script>*/
<script src="AgoraRTC_N-4.7.3.js"></script>
<script src='main.js'></script>
</html>