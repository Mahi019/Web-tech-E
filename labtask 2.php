<!DOCTYPE HTML>
<html>

<head>
<style>
 .error     
 {color: #FF0000;}

 </style>
</head>

<body style="background-color:cyan;">

    <?php
$NameErr = $EmailErr = $DateobErr = $GenderErr = $DegreeErr = $BloodErr = "";
$Name = $Email = $Dateob = $Gender = $Degree = $Blood = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Name"])) {
    $NameErr = "*Name required";
  } 
  else 
  {
    $Name = test_input($_POST["Name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Name)) {
      $NameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["Email"])) {
    $EmailErr = "*Email required";
  } else {
    $Email = test_input($_POST["Email"]);
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $EmailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["Dateob"])) 
  {
    $DateobErr = "*Date Of Birth required";
  } 
  else 
  {
    $dateob = test_input($_POST["Dateob"]);
  }
  if (empty($_POST["Gender"])) 
  {
    $GenderErr = "*Gender required";
  } 
  else 
  {
    $Gender = test_input($_POST["Gender"]);
  }
  if (empty($_POST["Degree"]))
  {
	  $DegreeErr = "* Select atleast 2 degree";
  }
  else
  {
	  $str = implode (", ", $_POST["Degree"]);
	  $Degree = test_input($str);
  }
 if (empty($_POST["Blood"]))
 {
	 $BloodErr = "*Must be Selected";
 }
 else
 {
  $Blood = test_input($_POST["Blood"]);
 }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <b>NAME:</b> <input type="text" name="name" value="<?php echo $Name;?>">
        <span class="error"> <?php echo $NameErr;?></span><br><br>
        <b>E-MAIL:</b> <input type="text" name="email" value=" <?php  echo  $Email;?>">
        <span class="error"> <?php echo $EmailErr;?></span><br><br>
        <b>DOB:</b> <input type="date" name="dob" value="<?php echo $Dateob;?>">
        <span class="error"><?php echo $DateobErr;?></span><br><br>
        
        <b>GENDER:</b>
        <br><br>
        <input type="radio" name="Gender" <?php if (isset($Gender) && $Gender=="male") echo "checked";?>
            value="male">Male
        <input type="radio" name="Gender" <?php if (isset($Gender) && $Gender=="Female") echo "checked";?>
            value="female">female
        <input type="radio" name="Gender" <?php if (isset($Gender) && $Gender=="other") echo "checked";?>
            value="other">Other
        <span class="error"> <?php echo $GenderErr;?></span>
        <br><br>
		
        <b>DEGREE:</b>
        <br><br>
        <input type="checkbox" name="Degree[]" <?php if (isset($degree) && $degree=="SSC") echo "checked";?>
            value="SSC">SSC
        <input type="checkbox" name="Degree[]" <?php if (isset($degree) && $degree=="HSC") echo "checked";?>
            value="HSC">HSC
        <input type="checkbox" name="Degree[]" <?php if (isset($degree) && $degree=="BSc") echo "checked";?>
            value="BSc">BSc
        <input type="checkbox" name="Degree[]" <?php if (isset($degree) && $degree=="Msc") echo "checked";?>
            value="MSc">MSc
        <span class="error"> <?php echo $DegreeErr;?></span>
        <br><br>
		
        <b>BLOOD:</b>
        <select name="bloodgrp">
            <option value="bloodgrp"></option>
            <option value="A+" <?php if(isset($Blood) && $Blood=="A+"){ echo ' selected="selected"'; } ?>>A+
            </option>
            <option value="A-" <?php if(isset($Blood) && $Blood=="A-"){ echo ' selected="selected"'; } ?>>A-
            </option>
            <option value="B+" <?php if(isset($Blood) && $Blood=="B+"){ echo ' selected="selected"'; } ?>>B+
            </option>
            
            <option value="AB+" <?php if(isset($Blood) && $Blood=="AB+"){ echo ' selected="selected"'; } ?>>AB+
            </option>
            <option value="AB-" <?php if(isset($Blood) && $Blood=="AB-"){ echo ' selected="selected"'; } ?>>AB-
            </option>
			<option value="O+" <?php if(isset($Blood) && $Blood=="O+"){ echo ' selected="selected"'; } ?>>O+
            </option>
            <option value="O-" <?php if(isset($Blood) && $Blood=="O-"){ echo ' selected="selected"'; } ?>>O-
            </option>
        </select>
        <span class="error"> <?php echo $BloodErr;?> </span>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>

</body>

</html>