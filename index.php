
<html>
<!--<link rel="stylesheet"-->
<!--      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href ="src/css/custom.css?version=1" rel="stylesheet">

<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">-->
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

<body>

<nav class="navbar navbar-default ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Crypto Coins</a>
            </div>
<!--            <ul class="nav navbar-nav">-->
<!--                <li><a href="#">Home</a></li>-->
<!--                <li><a href="#">Page 1</a></li>-->
<!--                <li><a href="#">Page 2</a></li>-->
<!--                <li><a href="#">Page 3</a></li>-->
<!--            </ul>-->
            <form class="navbar-form navbar-right">
                <div class="row">
                    <div id="imaginary_container">
                        <div class="input-group stylish-input-group">
                            <input type="text" class="form-control"  placeholder="Search" >
                            <span class="input-group-addon">
                                  <button type="submit">
                                       <span class="glyphicon glyphicon-search"></span>
                                  </button>
                            </span>
                         </div>
                    </div>
                </div>
            </form>
        </div>
</nav>

<!-- Navigation -->
<!--<div class="navbar-wrapper">-->
<!--    <div class="navbar navbar-inverse navbar-fixed-top">-->
<!--        <div class="navbar-inner">-->
<!--            <div class="container">-->
<!--                <!-- Responsive navbar -->-->
<!--                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>-->
<!--                </a>-->
<!--                <h1 class="brand"><a href="index.html">Maxim</a></h1>-->
<!--                <!-- navigation -->-->
<!--                <nav class="pull-right nav-collapse collapse">-->
<!--                    <ul id="menu-main" class="nav">-->
<!--                        <li><a title="team" href="#about">About</a></li>-->
<!--                        <li><a title="services" href="#services">Services</a></li>-->
<!--                        <li><a title="works" href="#works">Works</a></li>-->
<!--                        <li><a title="blog" href="#blog">Blog</a></li>-->
<!--                        <li><a title="contact" href="#contact">Contact</a></li>-->
<!--                        <li><a href="page.html">Page</a></li>-->
<!--                    </ul>-->
<!--                </nav>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


<!---->
<!--<script src = "libs/jquery/jquery-3.2.1.min.js"></script>-->
<!--<script src = "libs/knockout/knockout-3.2.0.js"></script>-->
<!--<!--        <script src = "libs/bootstrap-3.3.7-dist/css/bootstrap.min.css"></script>-->-->
<!--<script src = "src/js/custom.js"></script>-->
<!--    <nav>-->
<!--        <div class="nav-wrapper">-->
<!--            <a href="#!" class="brand-logo center">Logo</a>-->
<!--            <ul class="left hide-on-med-and-down">-->
<!--                <li><a>Sass</a></li>-->
<!--                <li><a>Components</a></li>-->
<!--                <li class="active"><a>JavaScript</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </nav>-->

<!-- <section >-->
<!--    <div class="container">-->
<!--        <-->
<!--    </div>-->
<!-- </section>-->

<!--<button data-bind="click: value_changed" ></button>-->

<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-sm-6 col-sm-offset-3">-->
<!--                <div id="imaginary_container">-->
<!--                    <div class="input-group stylish-input-group">-->
<!--                        <input type="text" class="form-control" data-bind="textInput:search_value ,event: { keyup: search_engine }" placeholder="Search" >-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-dark">
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Vote</th>
                        </tr>
                        </thead>
                        <tbody data-bind="foreach: _data_table">
                            <tr>
                                <td data-bind="text: id"></td>
                                <td data-bind="text: price"></td>
                                <td data-bind="text: cap"></td>
                                <td><button class = "btn" data-bind="click:  function(){ $root.voteInCoin($data); }">VOTE</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<!--        <button class="btn-danger" data-bind = " click : print">CLICA</button>-->
        <script src = "libs/jquery/jquery-3.2.1.min.js"></script>
        <script src = "libs/knockout/knockout-3.5.0beta.js"></script>
<!--        <script src = "libs/bootstrap-3.3.7-dist/css/bootstrap.min.css"></script>-->
        <script src = "src/js/custom.js"></script>
    </body>
</html>
