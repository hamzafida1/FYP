<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <title>
                        Case Details
                    </title>
                    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
                        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
                                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
                                    </script>
                                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
                                    </script>
                                    <style type="text/css">
                                        body {
        color: #566787;
        background: #f7f5f2;
    font-family: 'Roboto', sans-serif;
  }
  .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px auto;
    border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
    color: #fff;
    background:#2E8B57;    
    padding: 16px 25px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
        color: white;
    }
  .search-box {
        position: relative;
        float: right;
    }
  .search-box .input-group {
    min-width: 300px;
    position: absolute;
    right: 0;
  }
  .search-box .input-group-addon, .search-box input {
    border-color: #ddd;
    border-radius: 0;
  } 
    .search-box input {
        height: 34px;
        padding-right: 35px;
        background: #f4fcfd;
        border: none;
        border-radius: 2px !important;
    }
  .search-box input:focus {
        background: #fff;
  }
  .search-box input::placeholder {
        font-style: italic;
    }
  .search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 6px 0;
    }
    .search-box i {
        color: #a0a5b1;
        font-size: 19px;
        position: relative;
        top: 2px;
    }
    table.table {
        table-layout: fixed;
        margin-top: 15px;
    }
    table.table tr th, table.table tr td {
        border-color: #000000;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:first-child {
        width: 60px;
    }
    table.table th:last-child {
        width: 120px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
  table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
                                    </style>
                                    <script type="text/javascript">
                                        $(document).ready(function(){
  // Activate tooltips
  $('[data-toggle="tooltip"]').tooltip();
    
  // Filter table rows based on searched term
    $("#search").on("keyup", function() {
        var term = $(this).val().toLowerCase();
        $("table tbody tr").each(function(){
            $row = $(this);
            var name = $row.find("td:nth-child(4)").text().toLowerCase();
            console.log(name);
            if(name.search(term) < 0){                
                $row.hide();
            } else{
                $row.show();
            }
        });
    });
});
                                    </script>
                                </link>
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
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
        <br>
            <br>
                <br><br>
                
        @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif
        
                    <div class="container">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2>
                                            Case
                                            <b>
                                                Details
                                            </b>
                                        </h2>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="search-box">
                                            <div class="input-group">
                                                <input class="form-control" id="search" placeholder="Search by Name" type="text">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">
                                                            
                                                        </i>
                                                    </span>
                                                </input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th style="width: 15%;">
                                            Case Title
                                        </th>
                                        <th style="width: 22%;">
                                            Case Description
                                        </th>
                                        <th style="width: 15%;">
                                            Client Name
                                        </th>
                                        <th style="width: 15%;">
                                            Client Phone
                                        </th>
                                        <th style="width: 22%;">
                                            Opponent Name
                                        </th>
                                        <th style="width: 18%;">
                                            Court Name
                                        </th>
                                        
                                        <th style="width: 15%;">
                                            Status
                                        </th>
                                        <th style="width: 30%;">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caserecords as $caserecord)
                                    <tr>
                                      <td><b>{{++$i}}.</b></td>
                                      <td>{{$caserecord->case_title}}</td>
                                      <td>{{$caserecord->case_description}}</td>
                                      <td>{{$caserecord->client_name}}</td>
                                      <td>{{$caserecord->client_phone}}</td>
                                      <td>{{$caserecord->opponent_name}}</td>
                                      <td>{{$caserecord->court_name}}</td>
                                      
                                      <td>{{$caserecord->status}}</td>
                                      <td>
                                        <form action="{{ route('caserecord.destroy', $caserecord->id) }}" method="post">
                                        
                                          <a class="btn btn-sm btn-warning" href="{{route('caserecord.edit',$caserecord->id)}}">Edit</a>
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                      </td>
                                    </tr>
                                  @endforeach
                                    
                                </tbody>
                            </table>
                            {!! $caserecords->links() !!}
                        </div>
                    </div>
                </br>
            </br>
        </br>
    </body>
</html>
