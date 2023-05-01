<!DOCTYPE html>
<head>
<title> RESULT </title>
<link href="stylesheet.css" rel="stylesheet">
<style type="text/CSS">

body{
	background-image: url("wallpaperflare.com_wallpaper%20(2).jpg");
	background-attachment:fixed;
    background-repeat: no-repeat;
    background-size:100%;
}

form{
    border-radius:10px;
    background: #FAF5EC;
    padding:5px;
    text-align:center;
	width: 450px;
    height: 650px;
    position:relative;
    left:1150px;
    bottom:-50px;
	
}

.btn_result:before{
                width:280px;
                height:150px;
}

#logo{
    position:relative;
    z-index:1;
    left: 0px;
    top: 25px;
}

#username, #password, #stud_id, #stu_id, #stu_year, #uid{
    width:200px;
    height:30px;
    border-radius:10px;
    border:2px solid rgb(0, 0, 0); 
    font-size:35px;
}

h1{
    font-size:80px;
    text-shadow: 0 0 10px #4B0150;
}

</style>
</head>
<link href="stylesheet.css" rel="stylesheet">

<body>

<form method = "post" action = "insert_data.php">
<img id="logo" src="https://logolook.net/wp-content/uploads/2021/11/Hogwarts-Logo.png" height="150px" width="250px"></img>
<h1> RESULT</h1><br>

<label>STUDENT ID</label><br>
<input type="text" name="stud_id" id="stud_id">
<br><br>

<label>YEAR</label><br>
<input type="text" name="stu_year" id="stu_year">

<br><br><br>

<button type="submit" name="btn_result" class="btn_result" value="CHECK RESULT">CHECK RESULT</button>
</form>

</div>
</body>
</html>

<?php
include 'connect.php';

$sql_fetch = "SELECT * FROM result_login";

$query = mysqli_query($connection,$sql_fetch);

$num_rows = mysqli_num_rows($query);

$array = mysqli_fetch_array($query);

$student_id = isset($_POST['stud_id']) ? $_POST['stud_id'] : "";
$year = isset($_POST['stu_year']) ? $_POST['stu_year']: "";
?>

