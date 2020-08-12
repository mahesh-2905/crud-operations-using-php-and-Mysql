<?php
function userErr(){
    if(isset($_POST['create']) || isset($_POST['update'])){
        $fullname = $_POST['NAME'];
        if (empty($_POST["NAME"])) {
            echo "
                  <p class='text-center text-warning mb-0'>***Name is required</p>
            ";
          } 
        else {
            $fullname = ($_POST["NAME"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
              echo "
                   <p class='text-center text-warning mb-0'>***Only letters and white space allowed</p>
                   ";
            }
          }
    }
}
function emailErr(){
    if(isset($_POST['create']) || isset($_POST['update'])){
        $email = $_POST['EMAIL'];
        if(empty($email)){
            echo "
                  <p class='text-center text-warning mb-0'>***Email is required</p>
            ";
        }
        else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "
                   <p class='text-center text-warning mb-0'>***Invalid email format</p>
                   ";
              }
        }
    }
}
function mobileErr(){
    if(isset($_POST['create']) || isset($_POST['update'])){
        $mobile = $_POST['MOBILE'];
        if(empty($mobile)){
            echo "
                  <p class='text-center text-warning mb-0'>***Mobile number is required</p>
            ";
        }
        else{
            if(!preg_match('/^[1-9][0-9]*$/',$mobile)){
                echo "
                    <p class='text-center text-warning mb-0'>***Invalid number</p>
                ";
            }
        }
    }
}
function dobErr(){
    if(isset($_POST['create']) || isset($_POST['update'])){
        $dob = $_POST['DOB'];
        if(empty($dob)){
           echo "
           <p class='text-center text-warning mb-0'>***please enter your date of birth</p>
       ";
        }
    }
function pinErr(){
    if(isset($_POST['create']) || isset($_POST['update'])){
        $pin = $_POST['PIN'];
        if(empty($pin)){
            echo "
           <p class='text-center text-warning mb-0'>***please enter the pincode</p>
       ";
        }else{
            if(!preg_match('#[0-9]{5}#',$pin)){
                echo "
                    <p class='text-center text-warning mb-0'>***Invalid pincode</p>
                ";
            }
        }
    }
}    
}