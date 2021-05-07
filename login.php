<?php
 include('include/db.php');
include('include/session.php');
include('include/function.php');

$page = 'login';
$page2='admin';
?>

<?php  		

$msg = "";
$logout=g('logout');
  if($logout=='yes')
	{
	  session_destroy();
	 redirect('login.php');
	}

if(!empty($_SESSION['role'])){if($_SESSION['role']=='admin' ){redirect('dashboard.php');}}


if(array_key_exists('submit',$_POST))
		{
		$username=m($_POST['username']);
		$password=m($_POST['password']);
		$query = "SELECT * FROM login where username='$username' and password='$password'";
        $sql = mysqli_query($con,$query);
        $get =  mysqli_fetch_array($sql);
			if($get['username']===$username and $get['password']===$password)	{
				$_SESSION['role']='admin';
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
								$date = date('d/m/y H:i:s');
                $query = "update login set last_login='$date' where username='$username' and password='$password'";
                $sql = mysqli_query($con,$query) or die(mysqli_error($con));
               header("location:dashboard.php");
				}
				else{
				$_SESSION['ErrorMessage']= "Incorrect Username or Password";	}
}	
			
?>
  
<!DOCTYPE html>
<html>
<head>
   <title>cms</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
   <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </head>
    
    <style>
        nav 
        {
            background-color: transparent;
            width: auto;
            height: 50px;
        }
        nav ul
        {
            list-style: none
        }
       nav ul li
        {
            float: left;
            display: block;
             text-align: center;
            width: 140px;
            height: 50px;
            line-height: 50px;
            text-decoration: none;
        }
      nav ul li a
        {
            background-color: transparent;
            color: aliceblue;
            text-decoration: none;
            display: block;
            
        }
        
        nav ul li a:hover
        {
            background-color: aliceblue;
            color: gray;
            font-family: monospace;
            transition: 750ms;
            text-decoration: none;
            
            
        }
        @media and screen only(min-width)
        {
            .title
            {

            font-size: 80px;
        }
    }
        .title
        {
            margin-top: -200px;
            text-align: center;
            font-size: 40px;
            color: aliceblue;
            font-family:times new romans;
            margin-left:-50px;
           
        }
          .bgsec
        {
    background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.5)),url(img/blog.png);
    width: 98.76vw;
    height: 50vh;
     box-shadow: 4px 1px 15px 6px;
    color: darkgray;
    background-repeat: no-repeat;
    background-size: cover;
}

        .col-sm-3{background-color: yellowgreen}
        #footer{padding: 10px; border-top: 1px solid black; text-align: center;color: aliceblue;background-color: #0d0d0d}
        
        .lead
        {
            text-align: center;
            font-size: 15px;
        }
        
        * {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
    </style>
    <body>
     <section class="bgsec">
   
        <div style="height:5px; background-color:#1aa3ff; margin-top:-18px"></div>
            </div>
                
        </section>
        <div class="container-fluid">
            <div class="title"> BLOG LOGIN</div>
        </div>
       <!-- <h1>LATEST UPDATES BELOW...</h1>
            <hr>
        <p class="lead">Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p> -->
            <div class="container-fluid"></div>
<!--                main area starts-->
<div class="col-sm-12"  style="text-align:center;margin-top:200px">
     
    <div><?php echo message();?></div>
    <div><?php echo successmessage();?></div>
  
           <div class="form form-inline">
               <fieldset>
                   <legend><h1 style="font:size:50px;color:darkgreen">Admin Login</h1></legend>
           <form action="" method="post" autocomplete="off">
               <div class="form-group">
                   <label for="fname">Email:</label>
                   <input type="text"  autocorrrect="false" pattern="[a-zA-Z]{2,70}" placeholder="Email Address" autocomplete="false" spellcheck="false" name="username" class="form-control" required/>
               </div>
              <br>
               <br><br>
               <br>
               
                 <div class="form-group">
                   <label for="fname">Password:</label>
                  <input type="password" name="password" width="90%" pattern="[a-zA-Z0-9\@]{2,70}" placeholder="password" class="form-control" required/>
               </div>
               <br>
               <br>
               <div class="form-group">
                 <input type="submit" name="submit" value="Enter" class="btn btn-success" /><br></td>
               </div>
            </form>
               </fieldset>
    </div>
 <!--    footer starts-->
        
    <div style="background-color:#0080ff; height:8px"></div>
    </body>
   
</html>