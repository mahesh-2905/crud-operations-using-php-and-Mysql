<?php

function Createdb(){
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "Internship_Users";

    //creating the connection
    $con = mysqli_connect($servername,$username,$password);

    //checking the connection
    if(!$con){
        die("Failed to connect :".mysqli_connect_error());
    }

    // create Database

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con,$sql)){
        $con = mysqli_connect($servername,$username,$password,$dbname);

        $sql = "
            CREATE TABLE IF NOT EXISTS InternshipUsers(
                id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR (25) NOT NULL,
                email VARCHAR (20),
                mobile INT(10),
                date_of_birth VARCHAR(15),
                pin_code VARCHAR(15) 
        );
        ";
        if(mysqli_query($con,$sql)){
            return $con;
        }
        else{
            echo "Table not created..!";
        }
    }
    else{
        echo "Error while creating the database".mysqli_error($con);
    }
}