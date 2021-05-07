<?php
include('include/db.php');
include('include/session.php');
include('include/function.php');
?>
<?php 
$fnameError = "";
$lnameError = "";
$emailError = "";
$passError = "";
 $telError = "";
//$genderError = "";
//$websiteError = "";

if(isset($_POST["submit"])){
    if(empty($_POST["fname"])){
       $fnameError = "Firstname required";
    }
else{
     $fname = user_input($_POST["fname"]);
    if(!preg_match("/^[A-Za-z\ ]*$/", $fname)){
        $fnameError =" only letters allowed";
    }
}
    
        if(empty($_POST["lname"])){
       $lnameError = "Lastname required";
    }
else{
     $lname = user_input($_POST["lname"]);
    if(!preg_match("/^[A-Za-z\ ]*$/", $lname)){
        $lnameError =" only letters allowed";
    }
}
    
    if(empty($_POST["email"])){
       $emailError = "Email required";
    }
else{
     $email = user_input($_POST["email"]);
     if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $email)){
        $emailError =" invalid email format";
    }
}
 
      if(empty($_POST["pass"])){
       $passError = "password required";
    }
else{
     $pass = user_input($_POST["pass"]);
    if(!preg_match("/^[A-Za-z0-9\.\ \W]{8,}$/", $pass)){
        $passError =" minimum of 8 characters required";
    }
}
   
    if(empty($_POST["tel"])){
       $telError = "phone number is required";
    }
else{
     $tel = user_input($_POST["tel"]);
    if(!preg_match("/^[0-9\ ]{8,}$/", $tel)){
        $telError =" only numbers allowed";
    }
}
   
   
        
         
    
if(!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["email"]) && !empty($_POST["pass"]) && !empty($_POST["tel"])){
      if((preg_match("/^[A-Za-z\ ]*$/", $fname)==true) && (preg_match("/^[A-Za-z\ ]*$/", $lname)==true) && (preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $email )==true) && (preg_match("/^[A-Za-z0-9\.\ \W]{8,}$/", $pass )== true) && (preg_match("/^[0-9\ ]{8,}$/", $tel )== true)){
   
           $insert="INSERT INTO reg(fname,lname,email,pass,tel)VALUES('$fname','$lname','$email','$pass','$tel')";
          $exe=mysqli_query($con,$insert) or die(mysqli_error($con));
          if($exe)
          {
               $_SESSION['successMessage']= "Registration successful";
              redirect("blog.php");
          }
        }
        else{echo '<span class="error">please enter and complete your details again</span>';}
    }
}

function user_input($data){
    return $data;
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>REGISTER</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
   
    <style>
        body
        {
            background-color: aliceblue;
        }
        fieldset
        {
            margin: 50px;
            color: aliceblue;
           
        }
        input
        {
             background-color: transparent;
            text-align: center;
            margin-left: 30px;
            margin: 10px;
           
            
        }
        label
        {
             display: block;
            margin-top: 40px;
        }
        .error
        {
            color: firebrick;
          
        }
        
    </style>
    </head>
    <body>
       
            <fieldset>
                 <center>
                <legend style="color:#2eb82e">REGISTER NOW!</legend>
                
          
       <div class="form form-inline">
           <form action="" method="post" autocomplete="on">
               <div class="form-group">
                   <label for="fname">Firstname:</label>
                   <input type="text" placeholder="Enter Firstname" name="fname" pattern="[a-zA-Z]{2,70}" class="form-control" autofocus> 
                   <span class="error">* <?php  echo "{$fnameError}";  ?></span>
                  </div>
                    
                <div class="form-group">
                   <label for="fname">Lastname:</label>
                   <input type="text" placeholder="Enter Lasttname" name="lname" pattern="[a-zA-Z]{2,70}"  class="form-control"> 
                   <span class="error">* <?php  echo "{$lnameError}";  ?></span>
                  </div> <br>
           
            <div class="form-group">
                   <label for="email">Email:</label>
                   <input type="text" placeholder="Enter email" name="email" pattern="[a-zA-Z@.]{,70}" class="form-control" > 
                   <span class="error">* <?php  echo "{$emailError}";  ?></span>
                  </div> 
            <div class="form-group">
                   <label for="pass">Password:</label>
                   <input type="text" placeholder="Enter password" pattern="[a-zA-Z@.]{8,70}"  name="pass" class="form-control" > 
                   <span class="error">* <?php  echo "{$passError}";  ?></span>
                  </div>
                    <br>
                <div class="form-group">
                   <label for="phone">Tel:</label>
                   <input type="text" placeholder="Enter phone" name="tel" pattern="[+0-9]{8,70}"  class="form-control" > 
                   <span class="error">* <?php  echo "{$telError}";  ?></span>
                  </div> <br>
             <div class="form-group">
                   <input type="submit" value="Enter" name="submit" class="form-control btn btn-success" > 
                   
                  </div>
               </form>
               </div>
                 </fieldset>
           </center>
    </body>
     <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</html>