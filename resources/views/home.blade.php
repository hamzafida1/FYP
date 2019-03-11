<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicons
    ================================================== -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  </link>
  
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  </link>
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  </link>
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  </link>
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
  </link>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </link>
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
  </link>

  <!-- Stylesheet
    ================================================== -->
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  </link>
  <link rel="stylesheet" type="text/css" href="css/footer-style.css">
  </link>
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
  </link>
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
  </link>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  </link>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  </link>
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
  </link>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </link>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
  <link href="css\stylecategory.css" rel="stylesheet" type="text/css">
  </link>
  <link href="css\stylecard.css" rel="stylesheet" type="text/css">
  </link>
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- Navigation ==========================================-->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
          <span class="icon-bar"></span> </button>
        <a class="navbar-brand page-scroll" href="index.html">Easy Law</a> </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">
          <li><a href="/dashboard" class="page-scroll">Dashboard</a></li>
          <li><a href="/caserecord" class="page-scroll">Cases</a></li>
          <li><a href="/events" class="page-scroll">Case Schedule</a></li>
          
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" >
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                   
          

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
              <h1><span></span></h1>
              <h1></h1>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="main-container" align="center">
    <h1 class="x">
      <b>Popular Lawyers</b>
    </h1>
    <table align="center" cellspacing="50 px" style="width:90%">
      <tr>
        <td>
          <div class="card">
            <img class="image" alt="John" src="images\1.jpg">
            <h3 class="names">
              John Smith
            </h3>
            <p class="title">
              Senior Advocate, Supreme Court of London
            </p>
            <p class="L-category">
              Employment & Labor Lawyer
            </p>
            <div class="rating">
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
            </div>
            <button class="button button2">
              Contact Me
            </button>
            </img>
          </div>
        </td>
        <td>
          <div class="card">
            <img class="image" alt="Ennah Watson" src="images\6.jpg">
            <h3>
              Ennah Watson
            </h3>
            <p class="title">
              Senior Advocate, Supreme Court of Pakistan
            </p>
            <p class="L-category">
              Business Lawyer
            </p>
            <div class="rating">
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
            </div>
            <button class="button button2">
              Contact Me
            </button>
            </img>
          </div>
        </td>
        <td>
          <div class="card">
            <img class="image" alt="William" src="images\3.jpg">
            <h3>
              William Joe
            </h3>
            <p class="title">
              Senior Advocate, Supreme Court of Pakistan
            </p>
            <p class="L-category">
              Intellectual Property Lawyer
            </p>
            <div class="rating">
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
            </div>
            <button class="button button2">
              Contact Me
            </button>
            </img>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card">
            <img class="image" alt="John" src="images\5.jpg" style="width:100%">
            <h3>
              Arabella Birdie
            </h3>
            <p class="title">
              Associate Advocate, High Court of Brooklyn
            </p>
            <p class="L-category">
              Finance & Securities Lawyer
            </p>
            <div class="rating">
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
            </div>
            <button class="button button2">
              Contact Me
            </button>
            </img>
          </div>
        </td>
        <td>
          <div class="card">
            <img class="image" alt="Fernandis" src="images\4.jpg">
            <h3>
              Kevin Fernandis
            </h3>
            <p class="title">
              Senior Advocate, Supreme Court of Pakistan
            </p>
            <p class="L-category">
              Estate Planning Lawyer
            </p>
            <div class="rating">
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
            </div>
            <button class="button button2">
              Contact Me
            </button>
            </img>
          </div>
        </td>
        <td>
          <div class="card">
            <img class="image" alt="Mark" src="images\2.jpg">
            <h3>
              Mark Henary
            </h3>
            <p class="title">
              Senior Advocate, Supreme Court of Pakistan
            </p>
            <p class="L-category">
              Employment & Labor Lawyer
            </p>
            <div class="rating">
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
              <span class="fa fa-star checked">
              </span>
            </div>
            <button class="button button2">
              Contact Me
            </button>
            </img>
          </div>
        </td>
      </tr>
    </table>

    <div class="split-left">
      <h1 class="x">
        <b>Get Work Done Faster On Easy Law, With Confidence</b>
      </h1>
      <div style="margin-top: 30px;">
        <h3>
          Payment Protection, Guaranteed
        </h3>
        <p style="font-size: 17px;">
          Payment is released to the freelancer once you’re pleased and approve the work you get.
        </p>
      </div>
      <div style="margin-top: 30px;">
        <h3>
          Payment Protection, Guaranteed
        </h3>
        <p style="font-size: 17px;">
          Payment is released to the freelancer once you’re pleased and approve the work you get.
        </p>
      </div>
      <div style="margin-top: 30px;">
        <h3>
          Payment Protection, Guaranteed
        </h3>
        <p style="font-size: 17px;">
          Payment is released to the freelancer once you’re pleased and approve the work you get.
        </p>
      </div>
    </div>
    <div class="split-right">
      <img class="image1" src="https://timoswaltlaw.com/wp-content/uploads/2017/10/homeslidebb-1080x400.jpg">
    </div>
  </div>
  <div class="categories">
    <h1 class="x">
      <b>Lawyer Categories</b>
    </h1>

    <table align="center" cellspacing="500px" style="width:90%;">
      <tr>
        <td class="c-image">
          <a href="#personal" style="color:black ;font-size:14px;"><img src="images\Capture.JPG">
            <p><b>Personal
          </a></b></p>
          </a>
        </td>
        <td>
          <a href="#criminal" style="color:black ;font-size:14px;"><img class="c-image" src="images\Capture1.JPG">
            <p><b>Criminal
          </a></b></p>
          </a>
        </td>
        <td>
          <a href="#property" style="color:black ;font-size:14px;"><img class="c-image" src="images\Capture2.JPG">
            <p><b>Property
          </a></b></p>
          </a>
        </td>
        <td>
          <a href="#bankruptcy" style="color:black ;font-size:14px;"><img class="c-image" src="images\Capture3.JPG">
            <p><b>Bankruptcy
          </a></b></p>
          </a>
        </td>
      </tr>

      <tr>
        <td>
          <a href="#business" style="color:black ;font-size:14px;"><img class="c-image" src="images\Capture4.JPG">
            <p><b>Business
          </a></b></p>
          </a>
        </td>
        <td>
          <a href="#constitutional" style="color:black ;font-size:14px;"><img class="c-image" src="images\Capture5.JPG">
            <p><b>Constitutional
          </a></b></p>
          </a>
        </td>
        <td>
          <a href="#religious" style="color:black ;font-size:14px;"><img class="c-image" src="images\Capture6.JPG">
            <p><b>Religious
          </a></b></p>
          </a>
        </td>
        <td>
          <a href="#family" style="color:black ;font-size:14px;"><img class="c-image" src="images\Capture7.JPG">
            <p><b>Family
          </a></b></p>
          </a>
        </td>
      </tr>
    </table>
  </div>
  <div class="categ">
    <div id="personal">
      <br><br>
    </div>
    <h1 class="x">
      <b>Personal Lawyers</b>
    </h1>
    <div class="container">
      <div class="row">
        
          <div class="carousel slide multi-item-carousel" id="theCarousel8">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <!-- add  more items here -->
              <!-- Example item start:  -->

              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>

              <!--  Example item end -->
            </div>
            <a class="left carousel-control" href="#theCarousel8" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#theCarousel8" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        
      </div>
    </div>
    <div id="criminal">
      <br><br>
    </div>
    <h1 class="x">
      <b>Criminal Lawyers</b>
    </h1>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide multi-item-carousel" id="thCarousel">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <!-- add  more items here -->
              <!-- Example item start:  -->

              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>

              <!--  Example item end -->
            </div>
            <a class="left carousel-control" href="#thCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#thCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div id="property">
      <br><br>
    </div>
    <h1 class="x">
      <b>Property Lawyers</b>
    </h1>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide multi-item-carousel" id="theCarousel3">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <!-- add  more items here -->
              <!-- Example item start:  -->

              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>

              <!--  Example item end -->
            </div>

            <a class="left carousel-control" href="#theCarousel3" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#theCarousel3" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div id="bankruptcy">
      <br><br>
    </div>
    <h1 class="x">
      <b>Bankruptcy Lawyers</b>
    </h1>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide multi-item-carousel" id="theCarousel4">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <!-- add  more items here -->
              <!-- Example item start:  -->

              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>

              <!--  Example item end -->
            </div>

            <a class="left carousel-control" href="#theCarousel4" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#theCarousel4" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div id="business">
      <br><br>
    </div>
    <h1 class="x">
      <b>Business Lawyers</b>
    </h1>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide multi-item-carousel" id="theCarousel5">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <!-- add  more items here -->
              <!-- Example item start:  -->

              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>

              <!--  Example item end -->
            </div>
            <a class="left carousel-control" href="#theCarousel5" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#theCarousel5" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div id="constitutional">
      <br><br>
    </div>
    <h1 class="x">
      <b>Constitutional Lawyers</b>
    </h1>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide multi-item-carousel" id="thCarousel1">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <!-- add  more items here -->
              <!-- Example item start:  -->

              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>

              <!--  Example item end -->
            </div>
            <a class="left carousel-control" href="#thCarousel1" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#thCarousel1" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div id="religious">
      <br><br>
    </div>
    <h1 class="x">
      <b>Religious Lawyers</b>
    </h1>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide multi-item-carousel" id="theCarousel6">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <!-- add  more items here -->
              <!-- Example item start:  -->

              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>

              <!--  Example item end -->
            </div>

            <a class="left carousel-control" href="#theCarousel6" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#theCarousel6" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div id="family">
      <br><br>
    </div>
    <h1 class="x">
      <b>Family Lawyers</b>
    </h1>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide multi-item-carousel" id="theCarousel7">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>
              <!-- add  more items here -->
              <!-- Example item start:  -->

              <div class="item">
                <div class="col-xs-4">
                  <div class="card1">
                    <img class="image" alt="John" src="images\1.jpg">
                    <h3 class="names">
                      John Smith
                    </h3>
                    <p class="title">
                      Senior Advocate, Supreme Court of London
                    </p>
                    <p class="L-category">
                      Employment & Labor Lawyer
                    </p>
                    <div class="rating">
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                      <span class="fa fa-star checked">
                      </span>
                    </div>
                    <button class="button button2">
                      Contact Me
                    </button>
                    </img>
                  </div>
                </div>
              </div>

              <!--  Example item end -->
            </div>

            <a class="left carousel-control" href="#theCarousel7" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#theCarousel7" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <br><br><br>
    <br><br><br>
  </div>
  <div class="bottom-banner">
    <img style="max-width: 95%; margin-left: auto; margin-right: auto;display: block;" src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_1400,dpr_1.0/general_assets/logged_out_homepage/assets/signup/1440-cta2x.jpg">
    <div class="centered"><b>Find Lawyer Services For Your Issues Today</b>
      <p style="margin:15px;font-size:18px;">We've got you covered for all your Lawyer needs</p>
      <button class="bottom-btn">
        Get Started
      </button>
    </div>

  </div>
<footer class="page-footer font-small btn-dark lighten-5">

        <div class="bg-success">
          <div class="container">
    
            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">
    
              <!-- Grid column -->
              <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                <h5 class="mb-0">Get connected with us on social networks!</h5>
              </div>
              <!-- Grid column -->
    
              <!-- Grid column -->
              <div class="col-md-6 col-lg-7 text-center text-md-right">
    
                <!-- Facebook -->
                <a class="fb-ic">
                  <i class="fab fa-facebook-f white-text mr-4"> </i>
                </a>
                <!-- Twitter -->
                <a class="tw-ic">
                  <i class="fab fa-twitter white-text mr-4"> </i>
                </a>
                <!-- Google +-->
                <a class="gplus-ic">
                  <i class="fab fa-google-plus-g white-text mr-4"> </i>
                </a>
                <!--Linkedin -->
                <a class="li-ic">
                  <i class="fab fa-linkedin-in white-text mr-4"> </i>
                </a>
                <!--Instagram-->
                <a class="ins-ic">
                  <i class="fab fa-instagram white-text"> </i>
                </a>
    
              </div>
              <!-- Grid column -->
    
            </div>
            <!-- Grid row-->
    
          </div>
        </div>
    
        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">
    
          <!-- Grid row -->
          <div class="row mt-3 dark-grey-text">
    
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
    
              <!-- Content -->
              <h6 class="text-uppercase font-weight-bold">Easy Law</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p class="text-justify">“Easy Law” is a system which will facilitate the advocates/lawyers and their clients. Basically, this system we will provide an easy platform to clients to access the lawyers and discuss with them about their issues or cases. </p>
    
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
    
              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">Contact</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <a class="text-light link-unstyled" href="#!">Contact Marketing</a>
              </p>
              <p>
                <a class="text-light link-unstyled" href="#!">Contact Sales</a>
              </p>
              <p>
                <a class="text-light link-unstyled" href="#!">Contact HR</a>
              </p>
              <p>
                <a class="text-light link-unstyled" href="#!">Contact Admin</a>
              </p>
    
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
    
              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">About</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <a class="text-light link-unstyled" href="#!">Our Comapny</a>
              </p>
              <p>
                <a class="text-light link-unstyled" href="#!">About Us</a>
              </p>
              <p>
                <a class="text-light link-unstyled" href="#!">Terms of Services</a>
              </p>
              <p>
                <a class="text-light link-unstyled" href="#!">Our Team</a>
              </p>
    
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
    
              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">Contact</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <i class="fas fa-home mr-3 "></i> Lahore, NY 10012, Pakistan</p>
              <p>
                <i class="fas fa-envelope mr-3"></i> easylaw@gmail.com</p>
              <p>
                <i class="fas fa-phone mr-3"></i> + 42 234 567 88</p>
              <p>
                <i class="fas fa-print mr-3"></i> + 42 234 567 89</p>
    
            </div>
            <!-- Grid column -->
    
          </div>
          <!-- Grid row -->
    
        </div>
        <!-- Footer Links -->
    
        <!-- Copyright -->
        <div class="footer-copyright text-center text-light-50 py-3">© 2018 Copyright:
          <a class="text-light link-unstyled" href="https://mdbootstrap.com/education/bootstrap/"> EasyLaw.com</a>
        </div>
        <!-- Copyright -->
    
      </footer>
      <!-- Footer -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'>
  </script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
  <script src="js/index.js"></script>
  <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/SmoothScroll.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.js"></script>
  <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
  <script type="text/javascript" src="js/contact_me.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>

</html>