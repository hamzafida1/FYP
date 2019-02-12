<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" onload="myFunction()" style="margin:0;">
<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">


<div id="modal-wrapper" class="modal">

    <form class="modal-content animate" action="/action_page.php">

        <div class="imgcontainer">
            <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <img src="images/1.png" alt="Avatar" class="avatar">
            <h1 style="text-align:center">Login</h1>
        </div>

        <div >
            <input type="text" placeholder="Enter Username" name="uname" >
            <input type="password" placeholder="Enter Password" name="psw" >
            <button type="submit">Login</button>
            <input type="checkbox" style="margin:26px 30px;"> Remember me
            <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
        </div>

    </form>

</div>

<!-- Navigation
    ==========================================-->
<nav id="menu" >
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand page-scroll" href="/">Easy Law</a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">

                    <input type="text" class="form-control" placeholder="Find Lawyer">
                </div>

            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/" class="page-scroll"  >Why Easy Law</a></li>
                <li><a href="/signup" class="page-scroll">Sign up</a></li>
                <li><a href="#" onclick="document.getElementById('modal-wrapper').style.display='block'" class="page-scroll">Login</a></li>
                <li><button style="margin-left:20px" type="button" class="btn navbar-btn btn-success"  >Post Your Case</button></li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>

<!-- Header -->
<header id="header">
    <div class="intro">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 intro-text">
                        <h1>Solve Your Cases<span></span></h1>
                        <h1>With Layers</h1>
                        <p> Let's start with Sign Up</p>


                        <form method="get">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <input style="height:50px" type="text"  class="form-control" placeholder="What type of case your want to be solved....">
                                </div>
                                <a href="#features" class="btn btn-custom btn-lg  btn-success">Search Case</a>
                            </div>

                        </form>





                    </div>


                </div>
            </div>
        </div>
    </div>
</header>
</div>
<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 3000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>
<script>
    // If user clicks anywhere outside of the modal, Modal will close

    var modal = document.getElementById('modal-wrapper');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script type="text/javascript" src="{{URL::asset('js/jquery.1.11.1.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/SmoothScroll.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/nivo-lightbox.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jqBootstrapValidation.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/contact_me.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>