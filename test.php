 <?php
  include('Connexion/connexion.php');
  if(isset($_POST['submit'])&& !empty($_POST['email'])&& !empty($_POST['username']) && !empty($_POST['id']))
  {
	  $email=$_POST['email'];
	  $username=$_POST['username'];
	  $id=$_POST['id'];
	  $sql1="select * from information where email='$email' and username='$username' and id='$id'";
	  $query1=mysqli_query($con,$sql1);
	  $rows=mysqli_fetch_assoc($query1);
	  $z=$rows['password'];
	  if(!$query1)
	  {
		  echo"error".mysqli_error();
	  }
	  
	   if(mysqli_num_rows($query1)>0)
      {
			echo"<b>The password is :</b>".$z;
      }
      else
	     echo"<span class='error'>The  email address or username or id is incorrect. Please check the information !!!</span>";
  }
else
	echo"<span class='msgg'>Attention remplir tout les champs !!</span>";
 ?>
 <!doctype html>
 <html>
   <head>
     <meta charset="utf-8">
	 <link href="Css/style2.css"rel="stylesheet"/>
	   <title>Password Recovery</title>
	    </head>
        <body>
	     <div id="recovery">
		     <h1>Password Recovery !!!</h1>
			  <hr>
			 <fieldset>
			 <legend id="lege">Password Recovery :</legend>
	       <form method="post"action="">
		    <table>
			 <tr>
		     <td><b>Write your email :</b></td><td><input type="text" name="email"/></td>
			 </tr>
			 <tr>
		     <td><b>Write Username :</b></td><td><input type="text" name="username"/></td>
			 </tr>
			 <tr>
		     <td><b>Write id :</b></td><td><input type="number" name="id"/></td>
			 </tr>
			 <tr>
			 <td></td>
		     <td><input type="submit" name="submit"/></td>
			 </tr>
			</table> 
		   </form>
		     </fieldset>
	     </div>
	    </body>
  </html>	
 	