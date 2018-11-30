<?php
        $admNo = $name = $course = $class = "";
        $Err="";
        if(!empty($_GET['name']) and !empty($_GET['admNo']) and !empty($_GET['course']) and !empty($_GET['class'])){
        $name = $_GET['name'];
        $admNo = $_GET['admNo'];
        $class = $_GET['class'];
        $course = $_GET['course'];
        
        echo "Your admission no:$admNo<br/> Your name is:$name  <br/> Your course is:$course <br/> Your class is:$class <br/>";
        }
        
        else{
            echo "<h1>You need to return all fields</h1>";
        }
        ?>