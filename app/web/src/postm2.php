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
        <h2>PostMessage II</h2>
        <hr>
         <img src="https://media.tenor.com/images/ffaf998c2af9254dfa40822d67e5a2a7/tenor.gif" style="float:left;margin:0px 35px" alt="Carlino" width="500" height="333"> 
        <u><b>Regole</b></u>
        <ul>
            <li>Difficolta'<b>Easy</b>.</li>
            <li>Esegui un <code>alert(1)</code>come PoC</li>
            <li>Creare un PoC (link) che l'utente deve solo aprire </li>
            <li>Testato su <b>Tutti i Browser</b>.</li>
            <li><a href="postm3.php">Livello Post Message III</a>
        </ul>
        <hr>
    </div>

    <script>
    var postMessageHandler = function(msg) {
    var content = msg.data;
    var msgObj = eval(content);

    if (msgObj.isActive) {
      document.write("Messaggio arrivato!");
       }
    }
    window.addEventListener('message', postMessageHandler, false);

    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>

