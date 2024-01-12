<html>
<title>form registration></title>
<head>
<style>
        body{
            background-image:url("sik9.jpeg");
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
<form method="POST" action="">
<p><label for="username">USERNAME:</label></p>
<p><input type="text" id="username" minlength="1"placeholder="IZINA RY'AMBERE" name="username1" ></p>
<p><label for="username">USERNAME:</label></p>
<p><input type="text" id="username" minlength="1"placeholder="IZINA RY'AKABIRI" name="username2"></p>
<p><label for="email">EMAIL:</label></p>
<p><input type="email"id="email" name="email"></p>
<p><label for="sex">sex</label></p>
<select id="SEX" name="SEX">
<option value="M"name="SEX"> sex</option>

<option value="M"name="SEX"> M</option>
<option value="F"name="SEX">F</option>
</select>

<p><label for="bd">ITARIKI YAMAVUKO</label></p>
<p><input type="date" id="bd" name="date"></p>
<p><label for="qty">QUANTITY</label></p>
<p><input type="QUANTITY" id="qty" min="1" max="1000" name="qty"></p>
<p><label for="payment">UBURYO BWO KWISHYURA</label></p>
<select id="option" name="option">
<option value="MOMO" name="option"> mode of payment</option>
<option value="MOMO"name="option"> MOMO</option>
<option value="cash"name="option">CASH</option>
</select>

<!-- <p><input type="checkbox" id="LIKE">WISHIMIYE SERVICE WAHAWE?</p>
<p><label for="comment">GIRA ICYO UVUGA AHA</label></p>
<p><textarea id"comment" rows="5" cols="20"></textarea></p>
-->
<p><label for="password">PASSWORD:</label></p>
<p><input type="password" id="password" name="ps"></p>

<input type="submit" name="submit">
<input type="reset">

</form>
</tr>
</div>
</table>
<?php
$u1= $_POST['username1'];
$u2= $_POST['username2'];
$o= $_POST['option'];
$q= $_POST['qty'];
$t= $_POST['SEX'];
$p=$_POST['ps'];
if(isset($_POST['submit'])){
 echo $u1."<br/>";
 echo $u2."<br/>";
 echo $o."<br/>";
 echo $q."<br/>";
 echo $t."<br/>";
 echo $p;
}
else
{
	echo "data is saved";
}
?>


</body>
</html>