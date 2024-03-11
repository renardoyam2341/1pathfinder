<!DOCTYPE html>
<html>
    <head>
        <title>Videocall Student</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.cdnfonts.com/css/helvetica-neue-5" rel="stylesheet">
    </head>

    <body style="padding:0; margin:0;">
    
        <header style= "background-color: #484454; margin:0; padding:0; height:75px; margin-bottom:200px;">
            <div class="logo-title" style=" display:flex; padding-left: 5px;">
                <img style=" height:50px; align-self: center; "src="https://i.ibb.co/nPCXSp5/uclogo.png" alt="uc_logo" title="University of Cordilleras">
                <a style="text-decoration:none;"href="index.php"><h1 style="font-weight: bold; color:white; padding-left: 20px; font-size:30px; font-family:'Helvetica Neue';">PathFinder</h1> <a>
            </div>
        </header>

        <div style="text-align:center;">
            <input style="text-align:center; border-radius:10px; margin-bottom:10px;" placeholder="Enter room name..."
                    type="text"
                    id="username-input" /><br>
            <button style=" font-family:'Helvetica Neue'; border-radius:10px;" id="join-btn" onclick="joinCall()">Join Call</button>
        </div>
        <div id="video-call-div">
            <video muted id="local-video" autoplay></video>
            <video id="remote-video" autoplay></video>
            <div class="call-action-div">
                <button onclick="muteVideo()">Mute Video</button>
                <button onclick="muteAudio()">Mute Audio</button>
            </div>
        </div>
        <script src="./receiver.js"></script>
    </body>

</html>