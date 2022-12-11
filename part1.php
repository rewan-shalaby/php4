<?php
$nameErr = $emailErr = $genderErr = $detailsErr =$coursesErr =$agreeErr = "";
$name = $email = $gender = $details =$courses =$agree = "";
if (isset ($_POST['submit'])) {
 if ($_SERVER['REQUEST_METHOD']=="POST")
	{
	if (empty($_POST["name"])) {
		$nameErr = "Name is required";
	  }
	   else {
		$name = $_POST["name"];
	// if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
	// 	  $nameErr = "Only letters and white space allowed";}
		}
	  }
	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	  } else {
		$email = $_POST["email"];
	// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	// 	  $emailErr = "Invalid email format";
	//   }
	  }
	if (!empty($_POST["group"])) {
		$group = $_POST["group"];
	  } 
	if (!empty($_POST["details"])) {
		$details = $_POST["details"];
	  }
	if (empty($_POST["gender"])) {
		$genderErr = "Gender is required";
	  } else {
		$gender = $_POST["gender"];
	  }
	  if (empty($_POST["agree"])) {
		$agreeErr = "you must agree to terms";
	  } else {
		$agree = $_POST["agree"];
	  }
	}
		?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
		span{
			color: red;
		}
	</style>
</head>
<body>
<h1>Application Name: AAST_BIS Class Registration</h1> 
<span>* Required Field</span>
		<form action="<?php $_PHP_SELF ?>" method="post">
            <table>
            <tr>
            <td><label>Name:</label></td>
			<td><input type="text" name="name">
			<span class="error">* <?php echo $nameErr;?></span></td>
			</tr>
            <tr>
            <td> <label>E-mail:</label></td>
			<td><input type="text" name="email">
			<span class="error">* <?php echo $emailErr;?></span></td>
			</tr>
            <tr>
            <td><label>	Group #:</label></td>
			<td><input type="number" name="group"></td>
			</tr>
            <tr>
            <td><label>	Class details:</label></td>
			<td><textarea name="details" rows="5" cols="40"></textarea></td>
			</tr>
            <tr>
            <td><label>	Gender:</label></td>
			<td><input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male
			<span class="error">* <?php echo $genderErr;?></span></td>
			</tr>
            <tr>
            <td><label>	Select Courses:</label></td>
            <td>
                <select name='courses[]' multiple>
                <option>PHP</option>
                <option>JavaScript</option>
                <option>MySQL</option>
                <option>HTML</option>
                </select>
            </td>
            </tr>
            <tr>
            <td><label>Agree:</label></td>
			<td><input type="checkbox" name="agree">
			<span class="error">* <?php echo $agreeErr;?></span></td>
			</tr>
			<tr><td><input type="submit" name="submit"></td></tr>
                </table>
		</form>
		<?php
			echo "<h2>Your given values are as:</h2>";
			echo "Name:".$name;
			echo "<br>";
			echo "E-mail:".$email;
			echo "<br>";
			echo "Group".$group;
			echo "<br>";
			echo "Class:".$details;
			echo "<br>";
			echo "Gender:".$gender;
			echo "<br>";
			if (!empty($_POST["courses"])) {
				foreach($_POST["courses"] as $courses){
				echo "Your courses are:".$courses;
		}}
	
		?>
</body>

</html>
