<html>
<body>
<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'mydb';

    $con = mysqli_connect($host,$user,$pass,$db);
    if ($con)
        echo 'conection sucess';
?>
<button class="btn-danger" data-bind = " click : print">CLICA</button>
<script src = "libs/jquery/jquery-3.2.1.min.js"></script>
<script src = "libs/knockout/knockout-3.5.0beta.js"></script>
<!--<script src = "libs/bootstrap-3.3.7-dist/css/bootstrap.css"></script>-->
<script src = "src/js/custom.js"></script>
</body>
</html>
