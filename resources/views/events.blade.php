<!DOCTYPE html>
<html>
<head>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  </link>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </link>
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
  </link>

  <!-- Stylesheet
    ================================================== -->
  
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
   <link rel="stylesheet" type="text/css" href="css/style2.css">
  </link>
    

</head>
<body>
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
	<br><br><br><br><br><br>
	<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Case Schedule  

				</div>
				<div class="panel-body">
					{!! Form::open(array('route'=>'events.add','method'=>'POST','files'=>'true'))!!}
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							@if(Session::has('success'))
							<div class="alert alert-success">
								{{Session::get('success')}}
								
							</div>
							@elseif(Session::has('warning'))
							<div class="alert alert-danger">
								{{Session::get('warning')}}
								
							</div>
							@endif
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4">
							<div class="form-group">
								{!! Form::label('schedule_name','Case Name:')!!}
								<div class="">
									{!! Form::text('schedule_name',null,['class'=>'form-control'])!!}
									
								</div>
							</div>
							
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3">
							<div class="form-group">
								{!! Form::label('case_date','Date:')!!}
								<div class="">
									{!! Form::date('case_date',null,['class'=>'form-control'])!!}
									
								</div>
							</div>
							
						</div>
						<div class="col-xs-1 col-sm-1 col-md-1">&nbsp;<br/>
							{!!Form::submit('Add Schedule',['class'=>'btn btn-primary'])!!}
						</div>
					</div>
					{!!Form::close()!!}
				</div>
				
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					Cases Schedule
				</div>
				<div class="panel-body">
					{!! $calendar_details->Calendar() !!}
					{!! $calendar_details->script() !!}
					
				</div>
			</div>
		</div>
</body>
</html>
