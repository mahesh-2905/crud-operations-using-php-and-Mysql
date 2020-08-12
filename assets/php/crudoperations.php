<?php
require_once ('db.php');
require_once ('component.php');
require_once ('validation.php');
$con =Createdb();

//create button click
if(isset($_POST['create'])){
    CreateData();
}
//updating the data
if(isset($_POST['update'])){
    UpdateData();
}
//deleting the record
if(isset($_POST['delete'])){
    deleteRecord();
}

function CreateData(){
    $name = textboxValue("NAME");
    $email = textboxValue("EMAIL");
    $mobile = textboxValue("MOBILE");
    $dob = textboxValue("DOB");
    $pin = textboxValue("PIN");

    if($name && $email && $mobile && $dob && $pin && userErr() && emailErr() && mobileErr() &&dobErr() && pinErr()){
        $sql = "
            INSERT INTO InternshipUsers (name,email,mobile,date_of_birth,pin_code)
            VALUES ('$name','$email','$mobile','$dob','$pin')
        ";
        if(mysqli_query($GLOBALS['con'],$sql)){
            TextNode("bg-success p-3 text-center","Record created sucessfully...!");
        }
        else{
            TextNode("bg-warning p-3 text-center","Enable to create the record...!");
        }
    }
    else{
        TextNode("bg-warning p-3 text-center","Enable to create the record...!");
    }
}
function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}


//Reading the data 

function readData(){
    $sql = "
         SELECT * FROM InternshipUsers
    ";
    $result = mysqli_query($GLOBALS['con'],$sql);
    if(mysqli_num_rows($result)>0){
        return $result;
    }
}


//Updating the data

function UpdateData(){
    $id = textboxValue("ID");
    $name = textboxValue("NAME");
    $email = textboxValue("EMAIL");
    $mobile = textboxValue("MOBILE");
    $dob = textboxValue("DOB");
    $pin = textboxValue("PIN");
     
    if($name && $email && $mobile && $dob && $pin){
        
        $sql = "
            UPDATE InternshipUsers SET name='$name',email='$email',mobile='$mobile',date_of_birth='$dob',pin_code='$pin' WHERE id ='$id';
        ";
        if(mysqli_query($GLOBALS['con'],$sql)){
            TextNode("bg-success p-3 text-center","Record updated sucessfully...!");
        }
        else{
            TextNode("bg-warning p-3 text-center","Enable to update the record...!");
        }
    }
    else{
        echo "provide data";
    }
}

function deleteRecord(){
    $id = (int)textboxValue("ID");

    $sql = "DELETE FROM InternshipUsers WHERE id=$id";

    if(mysqli_query($GLOBALS['con'], $sql)){
        // echo "deleted";
        TextNode("bg-success p-3 text-center ","Record Deleted Successfully...!");
    }else{
        // echo "error";
        TextNode("bg-warning p-3 text-center ","Enable to Delete Record...!");
    }

}

// messages
function TextNode($classname, $msg){
    $element = "<h1 class='$classname msgstyle'>$msg</h1>";
    echo $element;
}


