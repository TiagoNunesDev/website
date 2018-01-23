<?php
include_once "includes/dbhandler.php"
?>
<!---->
<?php
//$sql = "INSERT into users_data (id ,username,password, email) VALUES ('6','Petr', 'Parr','peterparker@mail.com');";
//if(mysqli_query($con,$sql)){
//    echo "OK";
//}else{
//    echo "not OK";
//}
//?>

<html>
        <link href ="src/css/custom.css" rel ="stylesheet">
    <body>
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo center">Logo</a>
            <ul class="left hide-on-med-and-down">
                <li><a>Sass</a></li>
                <li><a>Components</a></li>
                <li class="active"><a>JavaScript</a></li>
            </ul>
        </div>
    </nav>

        <div class="container">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody id = "_table_content">

                </tbody>
            </table>
        </div>

<!--        <button class="btn-danger" data-bind = " click : print">CLICA</button>-->
        <script src = "libs/jquery/jquery-3.2.1.min.js"></script>
        <script src = "libs/knockout/knockout-3.5.0beta.js"></script>
        <script src = "src/js/custom.js"></script>
    </body>
</html>
