<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href ="style.css" rel ="stylesheet" type ="text/css">
        <title></title>
    </head>
    <body>
        <h1>Student Information</h1>
        <form method="get" action="response.php">
            Admission Number: <input type ="text" name="admNo" value ="">
            <br/><br/>Name: <input type="text" name="name" value="">
            <br/><br/>Course: <input type="radio" name="course" value="DCPE" checked="yes">DCPE
            <input type="radio" name="course" value="DEEE">DEEE
            <br/><br/>Class:<input type="text" name="class" value="">
            <br/><br/><input type="submit">
            
        </form>
</html>
