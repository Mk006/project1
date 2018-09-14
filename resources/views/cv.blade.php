<!DOCTYPE html>
<html>
  <head>
    <title>
      CDIP|CV Generate
    </title>
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!--
      <style>
          body{
              border-width: 2480px;
              border: 1px solid black;
          }
      </style>
-->
  </head>
  <body>

    <div class="container" style="border-width: 800px; border:1px solid black;margin-top:50px;">
      
       <div class="basic_info" style="margin-left: 25px; margin-top: 20px;">
           <div style="float: left;">
               <h4><strong>{{session('response')}}</strong></h4>
           <address>
               <h5><strong>Address: </strong> {{session('response2')}}<h5>
               <h5><strong>Phone: </strong>{{session('response3')}}<h5>
               <h5><strong>Email: </strong>{{session('response1')}}<h5>
           </address>
           </div>
           <div style="float: right;">
               <img src="{{URL::to('frontend/images/4.jpg')}}" style="height: 200px; width: 200px;"/>
           </div>
           
       </div>
       <div class="career_obj" style="clear:both; margin-left: 25px;">
           <h4><strong>Career Objective</strong></h4>
           <p>{{session('response4')}}</p>
            
       </div>
        <br>
         <div class="educational_info" style="clear:both; margin-left: 25px; margin-right: 0px;">
           <h4><strong>Educational Background</strong></h4>
             <br>
             <table class="table">
                  <tr>
                    <th>Examination</th>
                    <th>Institution</th>
                    <th>Concentration</th>
                    <th>Result</th>
                    <th>Year</th>
                  </tr>
                  <tr>
                    <td>{{session('response9')}}</td>
                    <td>{{session('response10')}}</td>
                    <td>CSE</td>
                    <td>{{session('response12')}}</td>
                    <td>{{session('response11')}}</td>
                  </tr>
                  <tr>
                    <td>{{session('response5')}}</td>
                    <td>{{session('response6')}}</td>
                    <td>CSE</td>
                    <td>{{session('response8')}}</td>
                    <td>{{session('response7')}}</td>                          
                  </tr>
                  <tr>
                    <td>SSC</td>
                    <td>{{session('response17')}}</td>
                    <td>{{session('response13')}}</td>
                    <td>{{session('response16')}}</td>
                    <td>{{session('response15')}}</td> 
                  </tr>
                 <tr>
                    <td>HSC</td>
                    <td>{{session('response22')}}</td>
                    <td>{{session('response18')}}</td>
                    <td>{{session('response21')}}</td>
                    <td>{{session('response20')}}</td> 
                  </tr>
             </table>       
       </div>
       <br>
       <div class="extra_obj" style="clear:both; margin-left: 25px;">
           <h4><strong>Extra-Curricular Activities</strong></h4>
           <ul class="list-group" style="margin-left: 15px;">
              <li>{{session('extracurriculam1')}}</li>
              <li>{{session('extracurriculam2')}}</li>
              <li>{{session('extracurriculam3')}}</li>
              <li>{{session('extracurriculam4')}}</li>
           </ul>
       </div>
       <br>
        <div class="achievement" style="clear:both; margin-left: 25px;">
           <h4><strong>Achievement</strong></h4>
           <ul class="list-group" style="margin-left: 15px;">
              <li>{{session('achievement1')}}</li>
              <li>{{session('achievement2')}}</li>
              <li>{{session('achievement3')}}</li>
              <li>{{session('achievement4')}}</li>
           </ul>
       </div>
       <br>
        <div class="skill_interests" style="clear:both; margin-left: 25px;">
           <h4><strong>Skill and Interests</strong></h4>
           <ul class="list-group" style="margin-left: 15px;">
              <li>{{session('skill1')}}</li>
              <li>{{session('skill2')}}</li>
              <li>{{session('skill3')}}</li>
              <li>{{session('skill4')}}</li>
           </ul>
       </div>
       <br>
        
        <div class="personal_info" style="clear:both; margin-left: 25px;">
           <h4><strong>Personal Information</strong></h4>
           <br>
           <h5><strong>Date Of Birth     <span style="letter-spacing: 91px;"> :</span> </strong><addres>{{session('birthdate')}}</addres></h5>
           <h5><strong>Nationality       <span style="letter-spacing: 107px;">:</span> </strong><addres>{{session('nationality')}}</addres></h5>
           <h5><strong>Material Status   <span style="letter-spacing: 80px;">:</span> </strong><addres>{{session('maritialState')}}</addres></h5>
           <h5><strong>Father's Name     <span style="letter-spacing: 83px;">:</span> </strong><addres>{{session('fatherName')}}</addres></h5>
           <h5><strong>Mother's Name     <span style="letter-spacing: 80px;">:</span> </strong><addres>{{session('motherName')}}</addres></h5>
           <h5><strong>Religion          <span style="letter-spacing: 124px;">:</span> </strong><addres>{{session('religion')}}</addres></h5>
           <h5><strong>Blood Group       <span style="letter-spacing: 95px;">:</span> </strong><addres>{{session('bloodGroup')}}</addres></h5>
           <h5><strong>Parmanent Address <span style="letter-spacing: 48px;">:</span> </strong><addres>{{session('permanantAddress')}}</addres></h5>
       </div>
       <br>
        <div class="reference_info" style="clear:both; margin-left: 25px;">
           <h4><strong>References</strong></h4>
           <br>
           <div class="row">
               <div class="col-sm-6">
                   <h4><strong>1. {{session('refname')}}</strong></h4>
                   <address>
                     {{session('refdesignation')}} <br> 
                     {{session('refinstitute')}}<br>
                     {{session('refphone')}}<br>
                     {{session('refemail')}}<br>
                   </address>
                   


               </div>
               <div class="col-sm-6">
                   <h4><strong>2. {{session('refname1')}}</strong></h4>
                   <address>
                     {{session('refdesignation1')}} <br> 
                     {{session('refinstitute1')}}<br>
                     {{session('refphone1')}}<br>
                     {{session('refemail1')}}<br>   
                   </address>
                   
               </div>
               
           </div>
           
       </div>
       <br>
      
      </div>

      <a href="{{url('/pdf')}}">Download Your CV</a>
   
  </body>

</html>