<?php
include('Connexion/connexion.php');
if(isset($_POST['submit']))
{
	if(!empty($_POST['username'])&&!empty($_POST['password'])&&!empty($_POST['Répét_Password'])&&!empty($_POST['email']))
	{
		$username=$_POST['username'];
		$password=$_POST['password']; 
	    $repet=$_POST['Répét_Password'];
		$email=$_POST['email'];
		if(preg_match(('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#'),$email)){
			
			if(preg_match(('#^[A-Z][a-z]{6,20}\.[0-9]{2,4}#'),$password))
			
			{
					if(strcmp($password,$repet)){
						
						$query1=mysqli_query($con,"INSERT INTO information VALUES('','$username','$password','$email')");
					}
				
			      else
			         echo'password doesn\'t mutch';
			
		
			}
		  else
	         echo"attention password";
		}
		else
	       echo"attention email";
    }
     else
		echo "All fields are recuired !!";
}
?>
 <!doctype html>
  <html>
   <head>
    <meta charset ="utf-8">
	<link rel="stylesheet" href="Css/style.css"/>
	<title>Login website</title>
</head>
	<body>
	   <div id='main'>
	      <div id='header'>
		  <span id="title">Www.LoginWebsite.Com</span>
		  </div>
		  <div id='content'>
		  <fieldset>
		  <legend> Registration </legend> 
		    <form method="post"action="index.php">
			<table>
			  <tr>
		      <td><b>username :</b></td><td><input type="text" name="username"/></td>
			  </tr>
			  <tr>
			  <td><b>Password :</b></td><td><input type="password"name="password" /></td>
			  </tr>
			  <tr>
			  <td><b>Répéte_Password :</b></td><td><input type="password"name="Répét_Password"/></td>
			  </tr>
			  <tr>
		      <td><b>email :</b></td><td><input type="text" name="email"/></td>
			  </tr>
			  <tr>
			  <td></td>
			  <td><input type ="submit" value="Valider" name="submit"/></td>
			  </tr>
			</table>
		    </form>
		  </fieldset>
		  </div>
		</div>  
    </body>
   </html>		