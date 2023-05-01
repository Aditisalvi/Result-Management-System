<?php
if(isset($_POST['btn_logout']))
{
    header("location: login.php");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PROFESSOR</title>
    <link href="stylesheet.css" rel="stylesheet">
    <style>
        body{
            background-color: #000000;
            
            background-image: url("wallpaperflare.com_wallpaper (4).jpg");
	background-attachment:fixed;
    background-repeat: no-repeat;
    background-size:100%;
        }

        input{
            width:200px;
    height:30px;
    border-radius:10px;
    border:2px solid rgb(0, 0, 0); 
    font-size:35px;
        }


.center {
                margin-left: auto;
                margin-right: auto;
            }

#form{
                border-radius:10px;
                background: #FAF5EC;
                padding:5px;
                text-align:center;
                width: 500px;
                height: 500px;
                position:relative;
                left:35%;
                bottom:50%;
                font-size:30px;
            }

            p{
        font-size:70px;
        font-family: Harry_Potter_Font;
        text-shadow: 0 0 10px #4B0150;
    }

    p span{ 
            
            text-align:center;
    font-size:120px;
    align:center;
    display: inline-flex; /* keep the background color wrapped tight */
    padding:20px;
    background-color:#4B0150;
    color:#CFB53B;
    text-shadow: 0 0 20px #000000;
    font-family: Harry_Potter_Font;
            }

            .container {
    text-align: center; /* center the child */
}
    @font-face {
    font-family: Harry_Potter_Font;
    src: url(HarryP.ttf);
}

@font-face {
    font-family: HP_Font;
    src: url(BluuNext-Titling.otf);
}
*{
    font-family: HP_Font;
    font-size:25px;
}

.btn_logout{
                font-size:20px;
                position: fixed;
                top: 15px;
                right: 20px;
            }

            .btn_logout::before{
                width:270px;
            }

            #edit_Marks::before{
                width:240px;
                height:150px;
            }
    </style>
</head>
<body>
<p class="container"><span>PROFESSOR</span></p>
    <form method="post" id="form">
    <p>EDIT MARKS</p>
    <table class="center">
        
        <tr>
            <td><label>Student ID</label></td>
            <td><input type="text" id="stud_id" name="stud_id"></td>
        </tr>
        <tr>
            <td><label>Year</label></td>
            <td><input type="text" id="stu_year" name="stu_year"></td>
        </tr>
        <tr>
            <td><label>Subject Name</label></td>
            <td><input type="text" id="sub_name" name="sub_name"></td>
        </tr>
        <tr>
            <td><label>Marks</label></td>
            <td><input type="text" id="edit_marks" name="edit_marks"></td>
        </tr>

    </table>
    <br>
    <button type="submit" id="edit_Marks" class="btn_edit" name="btn_edit">EDIT MARKS</button> <br><br>
</form>

<button type="submit" class="btn_logout" name="btn_logout" id="btn_logout" decoration="none"  style="font-size:20px;"> LOGOUT </button>

</body>
</html>

<?php include 'connect.php';
if(isset($_POST['btn_edit']))
{
    $prof_stud_id = isset($_POST['stud_id']) ? $_POST['stud_id'] : " ";
    $prof_stu_year = isset($_POST['stu_year']) ? $_POST['stu_year'] : " ";
    $prof_sub_name = isset($_POST['sub_name']) ? $_POST['sub_name'] : " ";
    $prof_marks = isset($_POST['edit_marks']) ? $_POST['edit_marks'] : " ";

    $sql_edit_marks = "UPDATE marks SET marks = '$prof_marks' WHERE stud_id = '$prof_stud_id' AND stu_year = '$prof_stu_year' AND sub_name = '$prof_sub_name'";

    if(mysqli_query($connection,$sql_edit_marks))
    {
        ?>
        <script>alert('Marks edited Successfully!');</script>
        <?php
    }
    else{
        header("location : professor.php");
    }

}
?>
