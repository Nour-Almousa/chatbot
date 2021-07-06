<?php
    require 'connect.php';
    if(isset($_POST['save']))
    {
        $m1= $_POST['m1'];
        $m2= $_POST['m2'];
        $m3 = $_POST['m3'];
        $m4= $_POST['m4'];
        $m5= $_POST['m5'];
        $m6 = $_POST['m6'];
        $query = "UPDATE motors SET motor1=$m1, motor2=$m2, motor3=$m3, motor4=$m4, motor5=$m5, motor6=$m6";
        $result= mysqli_query($con, $query);
    }
    if(isset($_POST['on']))
    {
        $query ="UPDATE motors SET on_off = 1";
        $result= mysqli_query($con, $query);
    }
    if(isset($_POST['f'])){
        $query = "UPDATE motors SET move='f';";
        $result= mysqli_query($con, $query);
    }
    if(isset($_POST['l'])){
        $query = "UPDATE motors SET move='l';";
        $result= mysqli_query($con, $query);
    }
    if(isset($_POST['r'])){
        $query = "UPDATE motors SET move='r';";
        $result= mysqli_query($con, $query);
    }    
    if(isset($_POST['b'])){
        $query = "UPDATE motors SET move='b';";
        $result= mysqli_query($con, $query);
    }
    if(isset($_POST['s'])){
        $query = "UPDATE motors SET move='s';";
        $result= mysqli_query($con, $query);
    }
?>
<!DOCTYPE html>
<html>
<header>
    <link rel="StyleSheet" href="stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</header>
<body>
    <div class="title">
            <h1 style="color:floralwhite; font-size:60px; margin-top: 80px;">لوحة التحكم</h1>
        </div>
    <div class="containers" id="c1">
        <div class="containers2">
            <form name="controlArm" method="POST" action="RobotArm.php" >
                <div class="top">
                <button id="f" class="btn" name="f">أمام</button>
                </div>
                <div class="middle">
                <button id="l" class="btn" name="l">يسار</button>
                <button id="s" class="btn" name="s">توقف</button>
                <button id="r" class="btn" name="r">يمين</button>
                </div>
                <div class="bottom">
                <button id="b" class="btn" name="b">خلف</button>
                </div>
<!--            </form>-->
        </div>
    </div>
    
    <div class="containers" id="c2">
        <div class="containers2">
<!--            <form name="controlArm" method="POST" action="RobotArm.php" >-->
        <div class="motors">
            <span class="val"></span>
            <input type="range" class="slider" min="0" max="100" name="m1">
            <label >محرك 1</label>
        </div>
        
        <div class="motors">
            <span class="val"></span>
            <input type="range" class="slider" min="0" max="100" name="m2">
            <label>محرك 2</label>    
        </div>
        
        <div class="motors">
            <span class="val"></span>
            <input type="range" class="slider" min="0" max="100" name="m3">
            <label >محرك 3</label>
        </div>
        
        <div class="motors">
            <span class="val"></span>
            <input type="range" class="slider" min="0" max="100" name="m4">
            <label >محرك 4</label>
        </div>
        
        <div class="motors">
            <span class="val"></span>
            <input type="range" class="slider" min="0" max="100" name="m5">
            <label >محرك 5</label>    
        </div>
            
        <div class="motors">
            <span class="val"></span>
            <input type="range" class="slider" min="0" max="100" name="m6">
            <label >محرك 6</label>  
        </div>
        
        <div id="buttonscontainer">
            <button class="button" id="on" name="on"><b>تشغيل</b></button>
            <button class="button" id="save" name="save"><b>حفظ</b></button>
        </div> 
        </form>
        </div>
    </div>
    <script>
    var rangeSlider = function()
    { 
        var slider = $('.motors'), range = $('.slider'), value = $('.val');
    
        slider.each(function()
        { value.each(function()
            { 
                var value = $(this).next().attr('value');$
                (this).html(value); 
            });
            range.on('input', function()
            {
                $(this).prev(value).html(this.value);
            });
        });
    };

    rangeSlider(); 
       
          window.watsonAssistantChatOptions = {
              integrationID: "1863274d-f29f-4fd4-9e2c-3b6f35b69363", // The ID of this integration.
              region: "eu-gb", // The region your integration is hosted in.
              serviceInstanceID: "b2747a4e-e0e0-4525-af25-07eb2c4c4d02", // The ID of your service instance.
              onLoad: function(instance) { instance.render(); }
            };
          setTimeout(function(){
            const t=document.createElement('script');
            t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
            document.head.appendChild(t);
          });

    </script>
</body>
</html>