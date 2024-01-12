<!DOCTYPE html>
<html>
<title>form registration></title>
<head>
<style>
        body{
            background-image:url("wpp1.jpg");
            background-repeat:4;
			background-attachment:fixed;
			background-size:100%;
		
        }
		#cent{
		bolder:30px;
		width:100%;
		height:100px;
		display:absolute;
		text-align:center;
		color:white;
		padding:20;
		}

    </style>
</head>
<body>
<div id="cent">
<table><tr>
<form method="POST">
<p><label for="farmerid">FARMERID:</label></p>
<p><input type="text" id="username" name="farmerid"placeholder="farmerid"required></p>
<p><label for="firstname">USERNAME:</label></p>
<p><input type="text" id="username" name="firstname"placeholder="IZINA RY'AMBERE"required></p>
<p><label for="secondname">USERNAME:</label></p>
<p><input type="text" id="username" name="secondname"placeholder="IZINA RY'AKABIRI"required></p>
<!--<p><label for="email">EMAIL:</label></p>
<p><input type="email"id="email"></p>-->
<!--<p><label for="sex">SEX  : </label></p>
<p><label for="sex">GORE</label></p>
<p><input type="radio"id="sex"  name="title"></p>
<p><label for="sex">GABO</label></p>
<p><input type="radio"id="sex"  name="title"></p>-->
<label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="akarere/umurenge" required>
            <br><br>
<p><label for="bd">ITARIKI YAMAVUKO</label></p>
<p><input type="date" id="bd"></p>
<!--<p><label for="qty">QUANTITY</label></p>
<p><input type="QUANTITY" id="qty" min="" max="1000"></p>-->
<p><label for="payment"name="payment">UBURYO BWO KWISHYURA</label></p>
<select id="payment"name="payment">
<option value="MOMO"> mode of payment</option>
<option value="MOMO"> MOMO</option>
<option value="cash">CASH</option>
</select></br>
<label for="telefone">Phone Number:</label>
            <input type="tel" id="telefone" name="telefone" required>
            <br><br>

<p label for="plotsize">size of plot</p>
<input type="number" id="number" name="size">
<!-- <p><input type="checkbox" id="LIKE">WISHIMIYE SERVICE WAHAWE?</p>
<p><label for="comment">GIRA ICYO UVUGA AHA</label></p>
<p><textarea id"comment" rows="5" cols="20"></textarea></p>
-->
<p><label for="password">PASSWORD:</label></p>
<p><input type="password" id="password" name="password"></p>

<input type="submit">
<input type="reset">
<?php
$servername="localhost";
$username="root";
$password="";
$db="hingakijyambere";
$conn=new mysqli($servername,$username,$password,$db);
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$farmer=$_POST["farmerid"];
	$first=$_POST["firstname"];
	$last=$_POST["secondname"];
	$adress=$_POST["address"];
	$phone=$_POST["telefone"];
	$size=$_POST["size"];
	$pay=$_POST["payment"];
	$password=$_POST["password"];
	$sql="INSERT INTO farmer(farmerid,firstname,secondname,address,telefone,plotsize,payment,password) values('$farmer','$first','$last','$adress','$phone','$size','$pay','$password')";
	if($conn->query($sql)===true){
		echo' record successfully adde';
		}
		else
			echo('error'.$conn->error);

			}
$conn->close();
?>
</form>
</tr>
</div>
</table>
<a href="javascript:history.back()">⬅️Go Back</a>

</body>
</html>