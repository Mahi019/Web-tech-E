<?php

if (isset($_GET['id'])){
	$id = $_GET['id'];
	$con = mysqli_connect("127.0.0.1","root","","pd");
	if ($con-> connect_error)
	{
		die("Connection Faild:" . $con-> connect_error);
	}

	$sql = "SELECT * from product where id = $id";
	$result = $con-> query($sql);
	$result = mysqli_fetch_object($result);
	$con-> close();
}

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
   

	<body style="background-color:powderblue;margin-left: 1em;padding: 0 7em 2em 0;border-width: 4px; border-color: black; border-style:solid;">
<form class="form" action="deleteAction.php" method="post">
			<input type="hidden" name="id" value="<?=$result->id?>">
             <table>
				<tbody>
					<tr>
						<td>Name:</td>
						<td><?= $result->Name ?></td>
					</tr>
					<tr>
						<td>Buying Price:</td>
						<td><?= $result->Buying_Price ?></td>
					</tr>
					<tr>
						<td>Selling Price:</td>
						<td><?= $result->Selling_Price ?></td>
					</tr>
					
				</tbody>
			 </table>
			 <hr>
			 <input type="submit" value="Delete">
        </form>
    </fieldset>

  
</body>

</html>
