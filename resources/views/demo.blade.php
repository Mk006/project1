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
           
       </div>
      </div>

      <a href="{{url('pdf')}}">Download Your CV</a>
   
  </body>

</html>