<?php 
function registr($name,$email,$pass){
    if(strlen($name)<3){
        echo "Atinizdi toliq jazin";
    }elseif(empty($email)){
        echo "Emaildi toliq jazin";
    }elseif(strlen($pass)<8){
        echo "Paroldi toliq jazin";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Emaildi duris jazin";
    }else{
    if(file_exists("data.txt")){
        fopen("data.txt","a");
        fwrite(fopen("data.txt","a"),$name."\r\n".$email."\r\n".$pass."\r\n");
    }
    }
}
function login($login,$pass){
    if(empty($login)){
        echo "Logindi toliq jazin";
    }elseif(empty($pass)){
        echo "Paroldi toliq jazin";
    }elseif(strlen($login)<3){
        echo "Login 3 haripten az";
    }elseif(strlen($pass)<8){
        echo "Parol 8 den az";
    }
    if(file_exists("data.txt")){
      
        $file = file('data.txt');
        if($file[1]===$login){
            echo "duris";
        }elseif($file[2] === $pass){
            echo "awa";
        }else{
            echo "Qate";
        }
    }   
}
?>