<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
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


        <title>
            CDIP Job Portal
        </title>
        <style>

            body{
                    
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
                        <a class="dropdown-toggle" data-toggle="dropdown"  style="color:#518CDF;">Services
                        <span class="caret"</span></a>
                        <ul class="dropdown-menu">
                        @if(session('data'))    
                        <li style="color:green;"><a href="createCV" >Create CV</a></li>
                        <li style="color:green;"><a href="#" >Find Job</a></li>
                        @else
                        <li style="color:green;"><a href="signin">Sign in first</a></li>
                        @endif
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
            @if(session('data')) 
              <li><a href="#" style="font-size: 18px"><span class="glyphicon glyphicon-user" style="color:#518CDF;"></span>{{session('data')}}</a></li>
              <li><a href="signout" style="font-size: 18px"><span class="glyphicon glyphicon-log-in" style="color:#518CDF;"></span> Logout</a></li>
            @else
              <li><a href="userregistration" style="font-size: 18px"><span class="glyphicon glyphicon-user" style="color:#518CDF;"></span> Sign Up</a></li>
              <li><a href="signin" style="font-size: 18px"><span class="glyphicon glyphicon-log-in" style="color:#518CDF;"></span> Login</a></li>
            @endif
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

        <div class="container">  
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 30%;">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="{{URL::to('frontend/image/ext.jpg')}}" alt="Overwatch" style="width:100%;height:400px">
                  <div class="carousel-caption">
                   
                  </div>
                </div>

                <div class="item">
                  <img src="{{URL::to('frontend/image/ff.jpg')}}" alt="heroesOfTheStorm" style="width:100%;height:400px">
                  <div class="carousel-caption">
                   
                  </div>
                </div>

                <div class="item ">
                  <img src="{{URL::to('frontend/image/career.jpg')}}" alt="Fifa 18" style="width:100%;height:400px">
                  <div class="carousel-caption">
                   
                  </div>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div><br><br>

          <div class="container-fluid text-center con service logo-small logo" style="background-color: #e3ecf9">
              <h2 style="color:orange;">SERVICES</h2>
              <h4>What we offer</h4>
              <br>
              <div class="row">
                <div class="col-sm-4">
                  <span class="glyphicon glyphicon-off"></span>
                  <h4>INDEPENDENCY</h4>
                  <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                  <span class="glyphicon glyphicon-heart"></span>
                  <h4>REAL LIFE PROJECT</h4>
                  <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                  <span class="glyphicon glyphicon-lock"></span>
                  <h4>JOB DONE</h4>
                  <p>Lorem ipsum dolor sit amet..</p>
                </div>
                </div>
                <br><br>
              <div class="row">
                <div class="col-sm-4">
                  <span class="glyphicon glyphicon-leaf"></span>
                  <h4>STRATEGY</h4>
                  <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                  <span class="glyphicon glyphicon-certificate"></span>
                  <h4>CERTIFIED</h4>
                  <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                  <span class="glyphicon glyphicon-wrench"></span>
                  <h4>HARD WORK</h4>
                  <p>Lorem ipsum dolor sit amet..</p>
                </div>
              </div>
            </div>
            <br><br>

            <div class="container-fluid text-center bg-grey">
                  <h2 style="color:orange;font-family: cursive;">Some Of Our Student's Projects</h2><br>
                  <div class="row text-center">
                    <div class="col-sm-4">
                      <div class="thumbnail">
                        <img src="{{URL::to('frontend/image/pro1.jpg')}}" alt="Paris" style="height: 200px;width: 100%;">
                        <p><strong>Paris</strong></p>
                        <p>Yes, we built Paris</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="thumbnail">
                        <img src="{{URL::to('frontend/image/pro2.jpg')}}" alt="New York" style="height: 200px;width: 100%;">
                        <p><strong>New York</strong></p>
                        <p>We built New York</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="thumbnail">
                        <img src="{{URL::to('frontend/image/pro3.jpg')}}" alt="San Francisco" style="height: 200px;width: 100%;">
                        <p><strong>San Francisco</strong></p>
                        <p>Yes, San Fran is ours</p>
                      </div>
                    </div>
            </div><br><br>

            <div class="container-fluid" >
              <h2 style="color: orange;">What our customers say</h2>
                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox" style="background-color: #e3ecf9">
                    <div class="item active">
                    <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
                    </div>
                    <div class="item">
                      <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
                    </div>
                    <div class="item">
                      <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                 </div>

              


            </div>


        <div class="container">
            <!--abtme part-->
    <section class="abtme">
        <div class="container  text-center ">
          
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 ">
                  <h2 style="color: #518CDF;font-family: sans-serif"> Some of the well known companies that recruit</h2><br><br>
                </div>
            </div>
            <div class="row myslick">
                <div class="col-md-3">
                    <div class="abtinner">
                       <img src="{{URL::to('frontend/image/fiverr.png')}}" alt="">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="abtinner">
                       <img src="{{URL::to('frontend/image/upwork.png')}}" alt="">   
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="abtinner">
                         <img src="{{URL::to('frontend/image/pph.png')}}" alt="">  
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="abtinner">
                          <img src="{{URL::to('frontend/image/freelancer.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="abtinner br">
                           <img src="{{URL::to('frontend/image/bdedu.png')}}" alt="">
                    </div>
                </div>



            </div>
        </div>
    </section>

                   

           
        </div>
        <br><br>
         <div class="container-fluid">
                <!-- Footer -->
                <footer class="text-center">
                   <div class="row">
                        <div class="col-md-4" style="margin-top: 20px;">
                          <h4>Contact Us</h4>
                          <p><span class="glyphicon glyphicon-map-marker"></span>Address: UIU Permanent Campus,United City, Madani Avenue, Badda Dhaka-1212, Bangladesh. </p>
                          <p><span class="glyphicon glyphicon-phone"></span>Phone:  01788670149/01629445961</p>
                          <p><span class="glyphicon glyphicon-envelope"></span>Email: cdip@uiu.ac.bd</p>
                       </div>
                       <div class="col-md-8">
                          <div class="container-fluid bg-grey">
                                <h2 class="text-left">CONTACT</h2>
                                <div class="row">
                                  <div class="col-sm-12">
                                    <div class="row">
                                      <div class="col-sm-6 form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                      </div>
                                      <div class="col-sm-6 form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                      </div>
                                    </div>
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                                    <div class="row">
                                      <div class="col-sm-3 form-group">
                                        <button class="btn btn-default pull-right" type="submit">Send</button>
                                      </div>
                                    </div> 
                                  </div>
                                </div>
                              </div>
                       </div>
                    </div>
                    
                    
                <br><br>
                  <p>Visit Our Courses Website<a href="https://www.cdip.uiu.ac,bd" data-toggle="tooltip" title=""> www.cdip.uiu.ac.bd</a></p> 
                </footer>
         </div>
        
        
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="{{asset('frontend/js/jquery.tubular.1.0.js')}}"></script>
      <script src="{{asset('frontend/js/jquery-1.12.4.min.js')}}"></script>
       <script src="{{asset('frontend/js/venobox.min.js')}}"></script>
     <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('frontend/js/slick.min.js')}}"></script>
     <script src="{{asset('frontend/js/script.js')}}"></script>
       
        
    </body>
</html>


