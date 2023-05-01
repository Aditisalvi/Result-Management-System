<?php include 'connect.php';

//Login page code
if(isset($_POST['login']))
{
    $username = isset($_POST['username']) ? $_POST['username']: " ";
    $password=isset($_POST['password']) ? $_POST['password']: " ";
    $user_type= isset($_POST['account_user']) ? $_POST['account_user']: " ";

    
    $sql_verify1 = "SELECT username FROM account_login WHERE password = '$password' AND user_type = '$user_type'";
    $result1 = mysqli_query($connection,$sql_verify1);
    $count1 = mysqli_num_rows($result1);

    if($count1 > 0)
    {
        if($user_type=='Student')
        {
            header("location: result.php");
        }
        else if($user_type=='Professor')
        {
            header("location: professor.php");
        }
        else
        {
            header("location: admin.php");
        }
    }

    else{
        ?>
        <script>alert('LOGIN NOT SUCCESSFUL !');</script>
        <?php
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title> LOGIN </title>
<link href="stylesheet.css" rel="stylesheet">
<style>
body{
    background-image: url("hogwarts.jpeg");
    background-size:100%;
    background-attachment:fixed;
    background-repeat: no-repeat;
}

form{
    border-radius:10px;
    background: #FAF5EC;
    padding:5px;
    text-align:center;
	width: 450px;
    height: 650px;
    position:relative;
    left:1185px;
    bottom:-50px;
}

#logo{
    position:relative;
    z-index:1;
    left: 0px;
    top: 25px;
}


span {
  color: #000;
  vertical-align: middle;
  text-shadow: 0 0 10px #4B0150;
}
/*
.fire {
  animation: animation 1s ease-in-out infinite alternate;
  -moz-animation: animation 1s ease-in-out infinite alternate;
  -webkit-animation: animation 1s ease-in-out infinite alternate;
  -o-animation: animation 1s ease-in-out infinite alternate;
}

.burn {
  animation: animation .65s ease-in-out infinite alternate;
  -moz-animation: animation .65s ease-in-out infinite alternate;
  -webkit-animation: animation .65s ease-in-out infinite alternate;
  -o-animation: animation .65s ease-in-out infinite alternate;
}

@keyframes animation
{
0% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #feec85,
  -20px -20px 40px #ffae34,
  20px -40px 50px #ec760c,
  -20px -60px 60px #cd4606,
  0 -80px 70px #973716,
  10px -90px 80px #451b0e;}
100% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #fefcc9,
  -20px -20px 40px #feec85,
  22px -42px 60px #ffae34,
  -22px -58px 50px #ec760c,
  0 -82px 80px #cd4606,
  10px -90px 80px  #973716;}
}

@-moz-keyframes animation
{
0% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #feec85,
  -20px -20px 40px #ffae34,
  20px -40px 50px #ec760c,
  -20px -60px 60px #cd4606,
  0 -80px 70px #973716,
  10px -90px 80px #451b0e;}
100% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #fefcc9,
  -20px -20px 40px #feec85,
  22px -42px 60px #ffae34,
  -22px -58px 50px #ec760c,
  0 -82px 80px #cd4606,
  10px -90px 80px  #973716;}
}

@-webkit-keyframes animation
{
0% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #feec85,
  -20px -20px 40px #ffae34,
  20px -40px 50px #ec760c,
  -20px -60px 60px #cd4606,
  0 -80px 70px #973716,
  10px -90px 80px #451b0e;}
100% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #fefcc9,
  -20px -20px 40px #feec85,
  22px -42px 60px #ffae34,
  -22px -58px 50px #ec760c,
  0 -82px 80px #cd4606,
  10px -90px 80px  #973716;}
}

@-o-keyframes animation
{
0% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #feec85,
  -20px -20px 40px #ffae34,
  20px -40px 50px #ec760c,
  -20px -60px 60px #cd4606,
  0 -80px 70px #973716,
  10px -90px 80px #451b0e;}
100% {text-shadow: 0 0 20px #fefcc9,
  10px -10px 30px #fefcc9,
  -20px -20px 40px #feec85,
  22px -42px 60px #ffae34,
  -22px -58px 50px #ec760c,
  0 -82px 80px #cd4606,
  10px -90px 80px  #973716;}
}
*/

    </style>
    </head>
    <body>
    
    <form method="post">
	
    <img id="logo" src="https://logolook.net/wp-content/uploads/2021/11/Hogwarts-Logo.png" height="150px" width="250px"></img>
    <h1 style="font-size:80px; text-shadow:  2 15px #E45323;"><span class="fire">L</span><span class="burn">O</span><span class="burn">G</span><span class="burn">I</span><span class="fire">N</span></h1>

    <input type="radio" id="account_user" name="account_user" value="Student">
    <label> Student </label>
    

    <input type="radio" id="account_user" name="account_user" value="Professor">
    <label> Professor </label>
   

    <input type="radio" id="account_user" name="account_user" value="Admin">
    <label> Admin </label>
    <br><br>

    <label> USERNAME </label><br>
    <input type="text" name="username" id="username">
    <br><br>
    
    <label> PASSWORD </label><br>
    <input type="password" name="password" id="password">
    <br><br><br>
    
    <button type="submit" class="btn_login" name="login" value="LOGIN" decoration="none" style="font-size:20px;"> LOGIN </button>
	
    </form>
    
</body>
</html>

