<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Hacker GIF</title>
</head>
<style>
body {
 margin:0;
 font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
 font-size:1rem;
 font-weight:400;
 line-height:1.5;
 color:#fff;
 text-align:left;
 background-color:#1c1e29
}
</style>

<body>
    <br><br>
    <div class="container">
        <h2>PostMessage IIIII</h2>
        <hr>
         <img src="https://i.pinimg.com/originals/31/ea/19/31ea19746dd0bcbee7a971b62a268d48.gif" style="float:left;margin:0px 35px" alt="Carlino" width="500" height="333"> 
        <u><b>Regole</b></u>
        <ul>
            <li>Difficolta'<b>Medium</b>.</li>
            <li>Esegui un <code>alert(1)</code></li>
            <li>Creare un PoC(link) che la vittima deve solo aprire </li>
            <li>Testato su <b>Tutti i Browser</b>.</li>
        </ul>
        <hr>
    </div>

    <script>
  
    window.addEventListener("message",function(message){ 
	    if  (message.origin.indexOf("h4t4way.root.sx") > 0) {
	    eval(message.data);
        }
     }); 

    
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>

