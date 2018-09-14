<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/main.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="{{asset('frontend/mycss/mystyle.css')}}">
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">  
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/style.css')}}"  rel="stylesheet">
        <style type="text/css">
            body
            {
                background-color: #f2f2f2;
            }
        </style>
    </head>

    <body>

        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
                   <a class="navbar-brand" href="#">
                       <img class="logoimg" src="{{URL::to('frontend/image/cdiplogo.jpg')}}" alt="Logo">
                   </a>
            </div>
              <div class="con">
                  <ul class="nav navbar-nav">
                        <li><a href="/" style="color:#518CDF;">Home</a></li>
                          <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#518CDF;">Services
                        <span class="caret"</span></a>
                        <ul class="dropdown-menu">
                        @if(session('data'))    
                        <li style="color:green;"><a href="ps4_games.html" target="_blank">Create CV</a></li>
                        <li style="color:green;"><a href="PC_gamess.html" target="black">Find Job</a></li>
                        @endif
                        <li style="color:green;"><a href="signin">Sign in first</a></li>
                        </ul>
                        </li>
                        <li><a href="news.html" target="_blank" style="color:#518CDF;">News</a></li>
                          <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#518CDF;">Courses
                        <span class="caret"</span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">All Courses</a></li>
                        <li><a href="#">Gaming</a></li>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Data Base</a></li>
                        </ul>
                        </li>
                  </ul>

              </div>
            
            <ul class="nav navbar-nav navbar-right" style="margin-top: -5px;">
              <li><a href="userregistration" style="font-size: 18px"><span class="glyphicon glyphicon-user" style="color:#518CDF;"></span> Sign Up</a></li>
              
              <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#518CDF;font-size: 18px">Help
                        <span class="caret"</span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">Gaming</a></li>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Data Base</a></li>
                        </ul>
              </li>
            </ul>
          </div>
        </nav>
        
        <div class="container-fluid">

        <div style = "border:1px solid black;border-radius:5px;padding:10px;width:70%;margin:5% 0 0 15%;background-color: #f2e9e1">
                <h3 style=" margin-bottom: 40px; margin-left: 42%;">Sign In Form</h3>
            <form class="form-horizontal" action="{{URL::to('/userlogin')}}" method="POST" style="margin-left: 100px;">
                {{csrf_field()}}
                

                

                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="user_email">Email:</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="user_email" placeholder="Enter Your Email" name="email" required>
                    </div>
                </div>

                

                <div class="form-group">
                    <label class="control-label col-sm-2" for="personal_info">Password:</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" id="user_password" placeholder="Enter password" name="pswrd" required>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-7">
                        <input type="hidden" class="form-control" id="token" value="{{csrf_token()}}" name="remember_token" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2" style="margin-left:492px">
                        <input type="submit" class="form-control" id="submit_button" value="Sign In" name="btn">
                    </div>
                </div>

                @if(session('response'))
                    <div class="col-sm-12 alert">
                        <h4>{{session('response')}}<h4>
                    </div>
                

                @endif
                
            </form>

        </div>                               
        </div>

    </body>

</html>