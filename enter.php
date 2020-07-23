<?php
include('Connexion/connexion.php');
if(isset($_POST['submit'])&& !empty($_POST['email'])&& !empty($_POST['password'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="select * from  information where email='$email' and password='$password'";
$query=mysqli_query($con,$sql);
if(!query)
{
	echo"error".mysqli_error();
}
if(mysqli_num_rows($query)>0)
{
	echo"ok";
}
else
	echo"<span class='error'>The password or email address is incorrect. Please check the information !!!</span>";
}
else
	echo"<span class='msgg'>Attention remplir tout les champs !!</span>";
?>
 <!doctype html>
 <html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Css/style1.css"/>
    <title>Log_in</title>
  </head>
  <body>
     <div id="one">
	 <h1>Log in to your site :</h1>
	 <div id="two">
	 
	 </div>
	 <div id="three">
	 <fieldset>
	 <legend>Log_in</legend>
	 <form method="post" action="">
	  <table>
	         <tr>
		      <td><b>email :</b></td><td><input type="text" name="email"/></td>
			  </tr>
			  <tr>
			  <td><b>Password :</b></td><td><input type="password"name="password"/></td>
			  </tr>
			  <tr>
			  <td></td>
			  <td><input type ="submit" value="connection" name="submit"/></td>
			  </tr>
			  <tr>
			   <td><a href="test.php"><span class="test">did you forget your password ?</span></a></td>
			  </tr>
			  <td></td>
			  <tr>
			   <td><a href="index.php"><span class="test2">Do you want to register again ?</span></a></td>
			  </tr>
	  </table>
	 </fieldset>
	  </div>
	  
	  </div>
  </body>
 </html> 