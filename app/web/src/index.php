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
        <h2>PostMessage I</h2>
        <hr>
         <img src="https://media1.tenor.com/images/406785d7aeec5ab764556676f4de579e/tenor.gif" style="float:left;margin:0px 35px" alt="Carlino" width="500" height="333"> 
        <u><b>Regole</b></u>
        <ul>
            <li>Difficolta'<b>Easy</b>.</li>
            <li>Esegui un <code>alert(1)</code>come PoC</li>
            <li>Creare un PoC (link) dove lo user deve solo aprire </li>
            <li>Testato su <b>Tutti i Browser</b>.</li>
            <li> <a href="postm2.php">Livello PostMessage 2</a>
        </ul>
        <hr>
    </div>

    <script>
     window.addEventListener("message", function(message) {
          alert(message.data);
     }); 
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>

