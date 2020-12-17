<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="nstyle.css">
    
  </head>
 
		<script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {

		if( document.myForm.mypic.value == "" ) {
            alert( "Please provide your Profile pic!" );
            document.myForm.mypic.focus() ;
            return false;
         }
      
         if( document.myForm.fname.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.fname.focus() ;
            return false;
         }
         if( document.myForm.nname.value == "" ) {
            alert( "Please provide your nickname!" );
            document.myForm.nname.focus() ;
            return false;
         }

		 if( document.myForm.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }

		 if( document.myForm.password.value == "" ) {
            alert( "Please provide your password!" );
            document.myForm.password.focus() ;
            return false;
         }
         if( document.myForm.Zip.value == "" || isNaN( document.myForm.Zip.value ) ||
            document.myForm.Zip.value.length != 5 ) {
            
            alert( "Please provide a zip in the format #####." );
            document.myForm.Zip.focus() ;
            return false;
         }
         if( document.myForm.Country.value == "-1" ) {
            alert( "Please provide your country!" );
            return false;
         }
         return( true );
      }
   //-->
</script>
	<form class="admin" method="post" name = "myForm" onsubmit = "return(validate());"   >
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
    
   

    

    

  </body>
</html>