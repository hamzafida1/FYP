<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Multi Step Form using semantic-ui</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">


    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body>


<html>

<head>
    <title>SignUp</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="signUp.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js"></script>
    <script type="text/javascript" src="signUp.js"></script>
</head>

<body style="background-color: #300032;">

<div class="ui centered  grid container">

    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>


    <div class="ui text container">


        <div class="three ui  buttons center aligned grid container" style="margin:20px;">


            <div class=" ui  big basic violet button" id="accountS">

                <div class="content " style="font-size:12px;color:white;">ACCOUNT SETUP</div>
            </div>


            <button class=" ui  big disabled blue basic button" id="socialP">
                <div class="content" style="font-size:12px;color:white;">CAREER PROFILE</div>
            </button>


            <button class=" disabled ui big orange basic button" id="details">

                <div class="content" style="font-size:12px;color:white;">PERSONAL DETAILS</div>
            </button>
        </div>


        <div class="row"></div>
        <div class="row"></div>


        <div id="account">


            <div class="ui center aligned  segment container " id="signUpBox" style="background-color: #F1F0FF;border-radius:5px;">


                <div class="ui centered header">
                    <h1 class="font" style="color:#300032;">Create your account</h1>
                </div>

                <form class="ui form">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" placeholder="Email-id" name="email">
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" placeholder="Password" name="password">
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" placeholder="Confirm Password" name="confirmpassword">
                        </div>
                    </div>

                    <div class="one ui buttons">
                        <button class="ui  inverted violet  medium button next1 ">Next</button>
                    </div>

                </form>


            </div>

        </div>


        <div id="social">


            <div class="ui center aligned  segment container " id="signUpBox" style="background-color: #F1F0FF;border-radius:5px;">


                <div class="ui centered header">
                    <h1 class="font" style="color:rgb(50,153,153);">Career Profile</h1>
                </div>

                <form class="ui form">
                    <div class="field">
                        <div class="ui left icon input">

                            <input type="text" placeholder="Law Firm Name" name="lawfirmname">
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui left icon input">

                            <input type="text" placeholder="Experience" name="experience">
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui left icon input">

                            <select placeholder="Category" name="category">
                                <option value="Business Lawyer">Business Lawyer</option>
                                <option value="Family Lawyer">Family Lawyer</option>
                                <option value="Tax Lawyer">Tax Lawyer</option>
                                <option value="Criminal Lawyer">Criminal Lawyer</option>
                            </select>

                        </div>
                    </div>

                    <div class="two ui buttons">
                        <button class="ui  inverted violet  medium button prev1">Previous</button>
                        <button class="ui  inverted violet  medium button next2">Next</button>
                    </div>

                </form>


            </div>

        </div>


        <div id="personal">


            <div class="ui center aligned  segment container " id="signUpBox" style="background-color: #F1F0FF;border-radius:5px;">


                <div class="ui centered header">
                    <h1 class="font" style="color:orange;">Personal Details</h1>
                </div>

                <form class="ui form" action="{{URL::to('/welcome')}}">
                    <div class="field">


                        <input type="text" placeholder="First Name" name="first_name">

                    </div>

                    <div class="field">


                        <input type="text" placeholder="Last Name" name="lastname">

                    </div>

                    <div class="field">


                        <input type="text" placeholder="Phone" name="phone">

                    </div>
                    <div class="field">


                        <input type="text" placeholder="Liscence Number" name="licencenumber">

                    </div>
                    <div class="field">


                        <input type="text" placeholder="Address" name="address">

                    </div>
                    <div class="field">


                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                    </div>

                    <div class="two ui buttons">
                        <button class="ui  inverted violet  medium button prev2">Previous</button>
                        <button type="submit" class="  medium button submit">Submit</button>
                    </div>

                </form>


            </div>

        </div>


    </div>
</div>


</body>

</html>



<script  src="{{URL::asset('js/index.js')}}"></script>





</body>

</html>
