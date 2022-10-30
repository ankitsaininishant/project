<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    #progressbar{
      border:0px solid red;
      background-color:red;
      width:20px;
      height:10px;
      position:relative;
      left:2px;
      top:1px;
      border-radius:2px;
    }
    .outerline{
      position:relative;
      border:1px solid black;
      border-radius:2px;
      left:150px;
      top:20px;
      width:400px;
      height:12px;
    }
    form{
      border:2px solid black;
      position:absolute;
      width:50%;
      height:70%;
      left:300px;
    }
  #first{
    position:relative;
    top:40px;
    left:200px;
    height:50px;
    display:inline;
    padding:50px;
  }
  fieldset{
    display:none;
    position:relative;
    top:40px;
    left:200px;
    height:50px;
    padding:50px;
  }

    </style>
    <meta charset="utf-8">
    <title></title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="jq/jquery-ui.js"></script>
<link href="jq/css/jquery-ui.css">


  </head>
  <body>
<form class="" action="index.html" method="post">
<div class="outerline">

  <div class=""id="progressbar"></div>

</div>

<fieldset id="first">


  <label for="">Age</label>
  <input type="number" name="age_s"placeholder="Enter Your Age" id="age"/></br></br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <button type="button" name="button" class="next1">Next</button>

</fieldset>

<fieldset id="second">


  <b>start</b>

  <label for="">1</label>

  <input type="radio" name="first" value="1">

  <label for="">2</label>

  <input type="radio" name="first" value="2">

  <label for="">3</label>

  <input type="radio" name="first" value="3">

  <label for="">4</label>

  <input type="radio" name="first" value="4">

  <label for="">5</label>

  <input type="radio" name="first" value="5">

  <b>end</b></br></br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="button" name="button" class="previous2">Previous</button>
  <button type="button" name="button" class="next2">Next</button>

</fieldset>

<fieldset id="thried">


 <label for="">Email</label>
 <input type="text" name="email_s" id="email"placeholder="Enter your email here"></br></br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <button type="button" name="" class="previous3">Previous</button>
 <button type="button" name="button" class="next3">Next</button>

</fieldset>

<fieldset id="four">



 <label for="">Email Code</label>
 <input type="text" name="email_s" value=""placeholder="Enter your verify code here"></br></br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <button type="button" name="" class="previous4">Previous</button>
 <button type="button" name="button" class="next4">Next</button>

</fieldset>


</form>
  </body>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".next1").on("click",function(){
      var age = $("#age").val();
      if(age >= 18){
        $("#first").css("display","none")
        $("#second").css("display","inline")
        $("#progressbar").css("width","100px")

    }else{
      alert("please enter valid age");
    }
      });
      $(".previous2").on("click",function(){
        $("#first").css("display","inline")
        $("#second").css("display","none")
        $("#progressbar").css("width","20px")
      });







      $(".next2").on("click",function(){
        if($('input[name="first"]:checked').length === 0) {
          alert('Please select one option');


      }else{
        $("#second").css("display","none")
        $("#thried").css("display","inline")
        $("#progressbar").css("width","200px")
      }
      });

      $(".previous3").on("click",function(){
        $("#second").css("display","inline")
        $("#thried").css("display","none")
        $("#progressbar").css("width","100px")
      });


        function validateEmail($email) {
        var emailReg =/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return emailReg.test( $email );
      }



      $(".next3").on("click",function(){
        var email = $("#email").val();
        if(! validateEmail(email)) {
        alert("Please Enetr a valid email")


    }else{

    $("#thried").css("display","none")
    $("#four").css("display","inline")
    $("#progressbar").css("width","300px")
    }
    });

      $(".previous4").on("click",function(){
        $("#thried").css("display","inline")
        $("#four").css("display","none")
        $("#progressbar").css("width","200px")
      });


$(".next4").on("click",function(){
  $("#four").css("display","none")
  $("#five").css("display","inline")
  $("#progressbar").css("width","396px")

  });

  });
  </script>
</html>
