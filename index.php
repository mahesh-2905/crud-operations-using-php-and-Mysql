<?php
  require_once ('./assets/php/component.php');
  require_once ('./assets/php/crudoperations.php');
  require_once ('./assets/php/validation.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/icofont/icofont.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid p-3">
        <div class="container">
            <h1 class="display-3 jumbotron-text text-center" >PHP CURD UI</h1>
        </div>
    </div>
    <div class="container-fluid">
       <div class="row">
           <div class="col-md-5">
               <div class="user_data">
                    <h2 class="my-4 text-center">User Data</h2>
                    <form action="" method="POST">
                        <?php userErr();?>  
                        <?php inputElement("col-md-2","col-md-10","NAME","Name :","text","NAME","name","Full name","","name_err");?>
                        
                        <?php emailErr()?>            
                        <?php inputElement("col-md-2","col-md-10","EMAIL","Email Id :","text","EMAIL","email","example@gmail.com","","email_err");?>
                        
                        <?php mobileErr()?>
                        <?php inputElement("col-md-2","col-md-10","MOBILE","Mobile no :","text","MOBILE","mobile","99999 00000","","mobile_err");?>
                        
                        <?php dobErr()?>
                        <?php inputElement("col-md-2","col-md-10","DOB","Date of Birth :","date","DOB","dob"," ","","dob_err");?>
                        
                        <?php pinErr()?>
                        <?php inputElement("col-md-2","col-md-10","PIN","Pin code :","text","PIN","pin"," ","","pin_err");?>
                        <!--hidden input-->
                        <?php inputElement("col-md-2 id","col-md-10","ID","id :","text","ID","id"," ","","id_err");?>

                        <div class="crud_group row d-flex justify-content-center mt-0 p-0">
                            <?php buttonElement("create","createbtn","btn btn-success m-3","Create","<i class='icofont-pen-alt-1'></i>")?>
                            <?php buttonElement("read","readbtn","btn btn-warning m-3","Read","<i class='icofont-page'></i>")?>
                            <?php buttonElement("update","updatebtn","btn btn-secondary m-3","Update","<i class='icofont-spinner-alt-3'></i>")?>
                            <?php buttonElement("delete","deletebtn","btn btn-danger m-3","Delete","<i class='icofont-bin'></i>")?>
                        </div>
                    </form>
                </div>    
           </div>
           <div class="col-md-7 m-0 p-0">
                <div class="crud_database">
                    <h2 class="text-center my-4">CRUD Database</h2>
                    <table class="table table-dark table-striped m-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email Id</th>
                                <th>Mobile no</th>
                                <th>Date of birth</th>
                                <th>Pin code</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              if(isset($_POST['read'])){
                                  $result = readData();
                                  if($result){
                                      while($row = mysqli_fetch_assoc($result)){ ?>
                                    <tr>
                                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['name'];?></td>
                                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['email'];?></td>
                                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['mobile'];?></td>
                                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['date_of_birth'];?></td>
                                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['pin_code'];?></td>
                                        <td><i  class="icofont-edit btnedit" data-id="<?php echo $row['id'];?>"></i></td>
                                    </tr>

                                    <?php
                                      }
                                  }
                              }
                            ?>
                        </tbody>
                    </table>
                </div>
           </div>
       </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- <script src="assets/js/validation.js"></script> -->
    <script src="assets/js/main.js"></script>
</body>
</html>