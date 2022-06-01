<?php

        $name = $_POST["name"];
        $password = $_POST["password"];


       
        $link = mysqli_connect('localhost','root','','1031');

        if (!$link)
        {
            die("连接失败:".mysqli_connect_error());
        }

        
        $sql = 'select * from love where name="'.$name.'"and password="'.$password.'"';

        $result = mysqli_query($link,$sql);
        $rows = mysqli_fetch_array($result);

        if($rows){
                $_SESSION['name'] = $name;
                include('LOVE/sakura.html');
        }else{
                include('Login.html');
                echo'<script>alert("you love wrong")</script>';
        }
?>