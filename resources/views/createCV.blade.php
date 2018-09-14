<!DOCTYPE html>
<html>
  <head>
    <title>
      cdip job portal
    </title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
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
                        <li style="color:green;"><a href="#">Find Job</a></li>
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
  

        <div class="container" style="border: 1px solid black;background-color:#f2e9e1;border-radius: 5px ">
            <h2 style=" margin-bottom: 40px; margin-left: 40%;">Curriculum Vitae Of</h2>
            <form class="form-horizontal" action="{{URL::to('/cvsubmit')}}" enctype="multipart/form-data" style="margin-left: -50px;">
      
                <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Full Name:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" value="{{session('data')}}" placeholder="Enter Your fullName" name="name" required>
                  </div>
                   
                 </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="user_name">Present Address:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_address" placeholder="Enter Your present Address" name="presentAddress" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="user_mobile">Mobile Number:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  id="user_mobile" placeholder="Enter Your Mobile Number" name="mobileNumber" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="user_email">Email:</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="user_email" placeholder="Enter Your Email Address" name="email" required>
                  </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="user_email">Carrier Objective:</label>
                     <div class="col-sm-10" >
                        <textarea rows="4" cols="128" name="carrierObjective" required>            
                        </textarea>
                     </div>
                 </div>
                 <div class="form-group">
                   <h3 class="control-label col-sm-7" for="personal_info">Personal Information</h3>
                   <br>
                 </div>
                
                  <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Father's Name:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your fatherName" name="fatherName" required>
                  </div>
                   
                 </div>
                  <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Mother's Name:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your motherName" name="motherName" required>
                  </div>
                   
                 </div>
                  
                  <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Perma. Address:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your parmanentaddress" name="permanantAddress" required>
                  </div>
                   
                 </div>
                  <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Date of Birth:</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" id="user_mobile" placeholder="Enter Your dateofbirth" name="birthdate" required>
                  </div>
                   
                 </div>
                  <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Nationality:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your nationality" name="nationality" required>
                  </div>
                   
                 </div>
                  <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Marital Status:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your maritalstatus" name="maritialState" required>
                  </div>
                   
                 </div>
                  <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Religion:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your religion" name="religion" required>
                  </div>
                   
                 </div>
                  <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Blood Group:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your Blood Group" name="bloodGroup" required>
                  </div>
                   
                 </div>
                 
                 
                <div class="form-group">
                   <label class="control-label col-sm-3" for="personal_info">ACADEMIC QUALIFICATION:</label>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="personal_info">Under Graduate:</label>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="uDepartment" required>
                          <option value="" style="color:blue;">BSC/BBA</option>
                          <option value="B.Sc">BSC</option>
                          <option value="BBA">BBA</option>
                        </select>
                        
                    </div>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="uUniversity" required>
                          <option value="" style="color:blue;">UNIVERSITY</option>
                          <option value="United International University">UIU</option>
                          <option value="North South University">NSU</option>
                          <option value="American International University Of Bangladesh">AIUB</option>
                          <option value="Ahsanullah University Of Science & Technology">AUST</option>
                          <option value="Independent University Of Bangladesh">IUB</option>
                          <option value="Deffodil International University">DIU</option>
                          <option value="Dhaka University">DU</option>
                          <option value="Brac University">BU</option>
                        </select>
                        
                    </div>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="uPassingYear" required>
                          <option value="" style="color:blue;">PASSING YEAR</option>
                          <option value="2019">2019</option>
                          <option value="2018">2018</option>
                          <option value="2017">2017</option>
                          <option value="2016">2016</option>
                          <option value="2015">2015</option>
                          <option value="2014">2014</option>
                          <option value="2013">2013</option>
                          <option value="2012">2012</option>
                        </select>
                        
                    </div>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="uCgpa" required>
                          <option value="" style="color:blue;">CGPA</option>
                          <option value="4.00">4.00</option>
                          <option value="3.67">3.67</option>
                          <option value="3.33">3.33</option>
                          <option value="3.00">3.00</option>
                        </select>
                    </div>   
                 </div>
                
                
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="personal_info">Post Graduate:</label>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="pDepartment" required>
                          <option value="" style="color:blue;">MSC/MBA</option>
                          <option value="M.Sc">MSC</option>
                          <option value="MBA">MBA</option>
                        </select>
                        
                    </div>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="pUniversity" required>
                          <option value="" style="color:blue;">UNIVERSITY</option>
                          <option value="United International University">UIU</option>
                          <option value="North South University">NSU</option>
                          <option value="American International University Of Bangladesh">AIUB</option>
                          <option value="Ahsanullah University Of Science & Technology">AUST</option>
                          <option value="Independent University Of Bangladesh">IUB</option>
                          <option value="Deffodil International University">DIU</option>
                          <option value="Dhaka University">DU</option>
                          <option value="Brac University">BU</option>
                        </select>
                        
                    </div>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="pPassingYear" required>
                          <option value="" style="color:blue;">PASSING YEAR</option>
                          <option value="2019">2019</option>
                          <option value="2018">2018</option>
                          <option value="2017">2017</option>
                          <option value="2016">2016</option>
                          <option value="2015">2015</option>
                          <option value="2014">2014</option>
                          <option value="2013">2013</option>
                          <option value="2012">2012</option>
                        </select>
                        
                    </div>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="pCgpa" required>
                          <option value="" style="color:blue;">CGPA</option>
                          <option value="4.00">4.00</option>
                          <option value="3.67">3.67</option>
                          <option value="3.33">3.33</option>
                          <option value="3.00">3.00</option>
                        </select>
                    </div> 
                 </div>
                
                
                
                
                
                
                 <div class="form-group">
                    <label class="control-label col-sm-2" for="personal_info">SSC:</label>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="sDepartment" required>
                          <option value="" style="color:blue;">DEPARTMENT</option>
                          <option value="SCIENCE">SCIENCE</option>
                          <option value="ARTS">ARTS</option>
                          <option value="COMARCE">COMARCE</option>
                        </select>
                        
                    </div>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="sBoard" required>
                          <option value="" style="color:blue;">BOARD</option>
                          <option value="Rajshahi">RAJ</option>
                          <option value="Dhaka">DHA</option>
                          <option value="Jessore">JES</option>
                          <option value="Rangpur">RAN</option>
                          <option value="Chittagong">CHI</option>
                          <option value="Sylhet">SYL</option>
                          <option value="Comilla">COM</option>
                        </select>
                        
                    </div>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="sPassingYear" required>
                          <option value="" style="color:blue;">PASSING YEAR</option>
                          <option value="2019">2019</option>
                          <option value="2018">2018</option>
                          <option value="2017">2017</option>
                          <option value="2016">2016</option>
                          <option value="2015">2015</option>
                          <option value="2014">2014</option>
                          <option value="2013">2013</option>
                          <option value="2012">2012</option>
                        </select>
                        
                    </div>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="sgpa" required>
                          <option value="" style="color:blue;">GPA</option>
                          <option value="5.00">5.00</option>
                          <option value="4.80">4.80</option>
                          <option value="4.50">4.50</option>
                          <option value="4.00">4.00</option>
                        </select>
                    </div>   
                 </div>
                
                
                
                <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Institute:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your HSC Institute Name" name="sInstitute" required>
                  </div>
                   
                 </div> 
                
                
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="personal_info">SSC:</label>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="hDepartment" required>
                          <option value="" style="color:blue;">DEPARTMENT</option>
                          <option value="SCIENCE">SCIENCE</option>
                          <option value="ARTS">ARTS</option>
                          <option value="COMARCE">COMARCE</option>
                        </select>
                        
                    </div>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="hBoard" required>
                          <option value="" style="color:blue;">BOARD</option>
                          <option value="Rajshahi">RAJ</option>
                          <option value="Dhaka">DHA</option>
                          <option value="Jessore">JES</option>
                          <option value="Rangpur">RAN</option>
                          <option value="Chittagong">CHI</option>
                          <option value="Sylhet">SYL</option>
                          <option value="Comilla">COM</option>
                        </select>
                        
                    </div>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="hPassingYear" required>
                          <option value="" style="color:blue;">PASSING YEAR</option>
                          <option value="2019">2019</option>
                          <option value="2018">2018</option>
                          <option value="2017">2017</option>
                          <option value="2016">2016</option>
                          <option value="2015">2015</option>
                          <option value="2014">2014</option>
                          <option value="2013">2013</option>
                          <option value="2012">2012</option>
                        </select>
                        
                    </div>
                    <div class="col-sm-2">
                        <select style="padding:10px;border-radius: 5px" name="hgpa" required>
                          <option value="" style="color:blue;">GPA</option>
                          <option value="5.00">5.00</option>
                          <option value="4.80">4.80</option>
                          <option value="4.50">4.50</option>
                          <option value="4.00">4.00</option>
                        </select>
                    </div>   
                 </div>

                 <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Institute:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your SSC Institute Name" name="  hInstitute" required>
                  </div>
                   
                 </div> 
                
                <br>
                <br>
                
                
                <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Skills:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your skill 1" name="skill1" required><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your skill 2" name="skill2"><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your skill 3" name="skill3"><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your skill 4" name="skill4"><br>
                  </div>
                   
                 </div>

                 <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Extra Curriculams:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your Extra Curriculam 1" name="extraCurriculam1" required><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your Extra Curriculaml 2" name="extraCurriculam2"><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your Extra Curriculam 3" name="extraCurriculam3"><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your Extra Curriculam 4" name="extraCurriculam4"><br>
                  </div>
                   
                 </div>
                
                
                 
                
                <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Achievements:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your achievement 1" name="achievement1" required><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your achievement 2" name="achievement2"><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your achievement 3" name="achievement3"><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Your achievement 4" name="achievement4"><br>
                  </div>
                 </div>


                 <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Reference Info 1:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Name" name="refname" required><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Designation" name="refdesignation" required><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Institute" name="refinstitute" required><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Phone Number" name="refphone" required><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Email Address" name="refemail" required><br>
                  </div>
                 </div>


                 <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Reference Info 2:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Name" name="refnameone"><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Designation" name="refdesignationone"><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Institute" name="refinstituteone"><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Phone Number" name="refphoneone"><br>
                    <input type="text" class="form-control" id="user_mobile" placeholder="Enter Email Address" name="refemailone"><br>
                  </div>
                 </div>


                 <div class="form-group">
                   <label class="control-label col-sm-2" for="personal_info">Image:</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="image" name="image" required>
                  </div>
                   
                 </div>



                 <div class="form-group">
                  <label class="control-label col-sm-8" for="personal_info"></label>
                  <div class="col-sm-2" >
                    <button class="btn btn-success"  type="submit" class="form-control" id="submit" value="Re Check & Confirm">Re Check & Confirm
                    </button>
                  </div>
                 </div>
                 
                 
                
                
                
                
                
                
               
            </form>
            
                                        
      </div>
   
  </body>

</html>