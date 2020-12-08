<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="nstyle.css">
    
  </head>
  <body>
		<head>
			<style>
			.admin{text-align:left;
			      padding: 40px;
				     margin:10px;
			     }
			
			</style>
		</head>
	<form class="admin" action="" enctype="multipart/form-data" method="post"   >
		<body>
	            
		<?php include_once './navbar.php'
?>	
        <h1>Edit Profile:</h1>
        <h2>Profile Picture</h2>
				<input type="file" name="mypic">
				<input type="submit" name="picturesubmit" value="Change profile picture">
				
				<h3>Full Name</h3>
				<input type="text" name="fname" value="" >
				<input type="submit" name="fullname" value="Change full name">					
				<h3>Nickname </h3>
				<input type="text" name="nname" value="">
			    <input type="submit" name="nickname" value="Change nick name">
	`			<h3>Email Address</h3>
				<input type="text" name="email" value=""><div id="email" class="val"></div>
				<br>
					<input type="submit" name="e_mail" value="Change email"> 
					<h3> Password</h3>
					<input type="password" name="password" value=""><div id="password" class="val"></div>
					<br>
					<input type="submit" name="password" value="Change password" ><br><br>
					<a href="Admin_home.php" class="done_btn">Done</a>
					
					
				</body>
			</form>


    
   
    </div>
    
   

    <div class="content">
      <div class="card">
        <h1></h1>
      </div>
      
    </div>

    

  </body>
</html>