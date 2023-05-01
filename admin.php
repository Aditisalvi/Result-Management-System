<?php
if(isset($_POST['btn_logout']))
{
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
        <title> ADMIN </title>
        <link href="stylesheet.css" rel="stylesheet">
        <style>
            button {
    z-index: 1;
    background-color:#4B0150;/*#461B7E; #6C2DC7;*/
    position: relative;
    display: inline-block;
    font-size: 20px;
    font-family: Harry_Potter_Font;
    padding: 15px 34px;
    color: #D4AF37;
    text-decoration: none;
    /*border: solid 5px #e4dee4;*/
    box-shadow: 12px 12px 0  -5px #3a229c;/*#7F38EC;*/
    transition: .3s;
     overflow: hidden;
    text-transform: uppercase;
    letter-spacing: 2px;
  }
  
  button:before {
    display: inline-block;
    transition: bottom, 0.35s;
    position: absolute;
    transform: skew(-50deg);
    top: 0px;
    left: 260px;
    background-color: #000000;
    content: "　";
    width: 222px;
    height: 120px;
    z-index: -1;
  }
  
  button:hover {
     box-shadow: 0px 0px 0  0px #000000;
  
  }
  
  button:hover:before {
    top: -40px;
    left: -40px;
  }
            body{
                background:black;
                background-image: url("https://cdn.wallpapersafari.com/58/65/IElo9V.jpg");
                background-repeat: no-repeat;
                background-attachment:fixed;
                background-size:80%;
                background-position:center;
            }

            #form1{
                border-radius:10px;
                background: #FAF5EC;
                padding:5px;
                text-align:center;
                width: 500px;
                height: 500px;
                position:relative;
                left:36%;
                bottom:50%;
                font-size:30px;
            }

            #form2{
                border-radius:10px;
                background: #FAF5EC;
                padding:5px;
                text-align:center;
                width: 700px;
                height: 1025px;
                position:relative;
                left:28%;
                bottom:-200px;
                font-size:30px;
            }

            #form3{
                border-radius:10px;
                background: #FAF5EC;
                padding:5px;
                text-align:center;
                width: 700px;
                height: 1400px;
                position:relative;
                left:29%;
                bottom:-400px;
                font-size:30px;
            }

            .center {
                margin-left: auto;
                margin-right: auto;
            }
               
            input{
                width:200px;
                height:30px;
                border-radius:10px;
                border:2px solid rgb(0, 0, 0); 
                font-size:35px;
                align : center;
            }

            td, th {
                vertical-align: top;
                height: 45px;
            }

            th {
                text-align: right;
            }

            table{
                text-align:center;
                align:center;
            }
            
            .description-edit {
                margin: 0 auto;
                width: 650px;
                text-align: center;
                border-collapse: collapse;
            }

            .description-edit td {
                border: 1px solid #B8B9BA;
                height: 40px;
                padding: 5px;
                background: rgba(255,255,255,0.70);
                text-align: center;
                vertical-align: middle;
            }

            .description-edit th {
                border: 1px solid #B8B9BA;
                height: 40px;
                background: #DBECFC;
                padding: 5px;
                text-align: center;
                vertical-align: middle;
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

    p{
        font-size:70px;
        font-family: Harry_Potter_Font;
        text-shadow: 0 0 10px #4B0150;
    }

    p span{ 
            
            text-align:center;
    font-size:120px;
    align:center;
    display: inline-flex; 
    padding:8px;
    background-color:#4B0150;
    color:#CFB53B;
    text-shadow: 0 0 20px #000000;
    font-family: Harry_Potter_Font;
            }

            .container {
    text-align: center; 
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
button{
    font-family: Harry_Potter_Font;
    font-size:20px;
    box-shadow:none;
    
}

  #delete_result::before{
                width:280px;
                height:150px;
            }

            #add_result::before{
                width:240px;
                height:150px;
            }
        </style>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#DELETE").click(function(){
    $("#form1").toggle();
    });

    $("#ADD").click(function(){
    $("#form2").toggle();
    });

    $("#MODIFY").click(function(){
    $("#form3").toggle();
    });
});
</script>-->
    </head>
    <body>
      
        <p class="container"><span>ADMIN</span></p>
        <br>
        <!--
        <h1 class="container"><span>RESULT :</span></h1>
        <button type="submit" id="ADD" >ADD</button>
        <button type="submit" id="MODIFY" >MODIFY</button>
        <button type="submit" id="DELETE" >DELETE</button>
-->
        <form method="post" id="form1">
            <p>DELETE RESULT</p>
            <table class="center">
                <tr>
                    <td><label>Student Name</label></td>
                    <td><input type="text" id="stu_name" name="stu_name"></td>
                </tr>
                <tr>
                    <td><label>Student ID</label></td>
                    <td><input type="text" id="del_stud_id" name="del_stud_id"></td>
                </tr>
                <tr>
                    <td><label>Year</label></td>
                    <td><input type="text" id="del_stu_year" name="del_stu_year"></td>
                </tr>
            </table>
            <br>
            <button type="submit" id="delete_result" class="button" name="btn_delete" value="DELETE RESULT">DELETE RESULT</button>
            
        </form>

        <form method="post" id="form2">
        <p>ADD RESULT</p>
            <table class="center">
                <tr>
                    <td><label>Student Name</label></td>
                    <td><input type="text" id="add_stu_name" name="add_stu_name"></td>
                </tr>
                <tr>
                    <td><label>Student ID</label></td>
                    <td><input type="text" id="add_stud_id" name="add_stud_id"></td>
                </tr>
                <tr>
                    <td><label>Year</label></td>
                    <td><input type="text" id="add_stu_year" name="add_stu_year"></td>
                </tr>
                <tr>
                    <td><label>House</label></td>
                    <td><input type="text" id="add_house" name="add_house"></td>
                </tr>
            </table>

            <br><br>
            <div class="edit">
            <table class="description-edit" class="center">
                <tr>
                    <td>No.</td>
                    <td>Subject Name</td>
                    <td>Marks</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Astronomy</td>
                    <td><input type="text" id="add_marks1" name="add_marks1"></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Charms</td>
                    <td><input type="text" id="add_marks2" name="add_marks2"></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Defense Against the Dark Arts</td>
                    <td><input type="text" id="add_marks3" name="add_marks3"></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Herbology</td>
                    <td><input type="text" id="add_marks4" name="add_marks4"></td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>History of Magic</td>
                    <td><input type="text" id="add_marks5" name="add_marks5"></td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Potions</td>
                    <td><input type="text" id="add_marks6" name="add_marks6"></td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Transfiguration</td>
                    <td><input type="text" id="add_marks7" name="add_marks7"></td>
                </tr>
            </table>
</div>
<br>
            <button type="submit" id="add_result" class="button" name="btn_add_result" value="ADD RESULT">ADD RESULT</button>
        </form>

<form method="post" id="form3">
<p>MODIFY RESULT</p>
<table class="center">
    <tr>
        <td><label>Student ID</label></td>
        <td><input type="text" name="stud_id" id="stud_id"></td>
    </tr>
    <tr>
        <td><label>Year</label></td>
        <td><input type="text" name="stu_year" id="stu_year"><td>
    </tr>
</table>

<br><br>

<div class="edit">
    <table class="description-edit" class="center">
        <tr>
            <td>1</td>
            <td>Name</td>
            <td><input type="text" id="modify_name" name="modify_name"></td>
            <td class="button-edit">
                <button type="submit" class="style-button-edit" id="edit_name" name="edit_name" >EDIT</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Student ID</td>
            <td><input type="text" id="modify_id" name="modify_id"></td>
            <td class="button-edit">
                <button type="submit" class="style-button-edit" id="edit_stu_id" name="edit_stu_id" >EDIT</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Year</td>
            <td><input type="text" id="modify_year" name="modify_year"></td>
            <td class="button-edit">
                <button type="submit" class="style-button-edit" id="edit_year" name="edit_year" >EDIT</button>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>House</td>
            <td><input type="text" id="modify_house" name="modify_house"></td>
            <td class="button-edit">
                <button type="submit" class="style-button-edit" id="edit_house" name="edit_house" >EDIT</button>
            </td>
        </tr>
        <tr>
            <td rowspan="2">5</td>
            <td>Subject</td>
            <td>Astronomy</td>
            <td rowspan="2" class="button-edit">
                <button type="submit" class="style-button-edit" id="edit_marks1" name="edit_marks1" >EDIT</button>
            </td>
        </tr>
        <tr>
            <td>Marks</td>
            <td><input type="text" id="modify_marks1" name="modify_marks1"></td>
        </tr>
        <tr>
            <td rowspan="2">6</td>
            <td>Subject</td>
            <td>Charms</td>
            <td rowspan="2" class="button-edit">
                <button type="submit" class="style-button-edit" id="edit_marks2" name="edit_marks2" >EDIT</button>
            </td>
        </tr>
        <tr>
            <td>Marks</td>
            <td><input type="text" id="modify_marks2" name="modify_marks2"></td>
        </tr>
        <tr>
            <td rowspan="2">7</td>
            <td>Subject</td>
            <td>Defense Against the Dark Arts</td>
            <td rowspan="2" class="button-edit">
                <button type="submit" class="style-button-edit" id="edit_marks3" name="edit_marks3" >EDIT</button>
            </td>
        </tr>
        <tr>
            <td>Marks</td>
            <td><input type="text" id="modify_marks3" name="modify_marks3"></td>
        </tr>
        <tr>
            <td rowspan="2">8</td>
            <td>Subject</td>
            <td>Herbology</td>
            <td rowspan="2" class="button-edit">
                <button type="submit" class="style-button-edit" id="edit_marks4" name="edit_marks4" >EDIT</button>
            </td>
        </tr>
        <tr>
            <td>Marks</td>
            <td><input type="text" id="modify_marks4" name="modify_marks4"></td>
        </tr>
        <tr>
            <td rowspan="2">9</td>
            <td>Subject</td>
            <td>History of Magic</td>
            <td rowspan="2" class="button-edit">
                <button type="submit" class="style-button-edit" id="edit_marks5" name="edit_marks5" >EDIT</button>
            </td>
        </tr>
        <tr>
            <td>Marks</td>
            <td><input type="text" id="modify_marks5" name="modify_marks5"></td>
        </tr>
        <tr>
            <td rowspan="2">10</td>
            <td>Subject</td>
            <td>Potions</td>
            <td rowspan="2" class="button-edit">
                <button type="submit" class="style-button-edit" id="edit_marks6" name="edit_marks6" >EDIT</button>
            </td>
        </tr>
        <tr>
            <td>Marks</td>
            <td><input type="text" id="modify_marks6" name="modify_marks6"></td>
        </tr>
        <tr>
            <td rowspan="2">11</td>
            <td>Subject</td>
            <td>Transfiguration</td>
            <td rowspan="2" class="button-edit">
                <button type="submit" class="style-button-edit" id="edit_marks7" name="edit_marks7" >EDIT</button>
            </td>
        </tr>
        <tr>
            <td>Marks</td>
            <td><input type="text" id="modify_marks7" name="modify_marks7"></td>
        </tr>
    </table>
</div>
<br>
<button type="submit" class="btn_logout" name="btn_logout" id="btn_logout" decoration="none" style="font-size:20px;"> LOGOUT </button>
</form>

    

</body>
</html>

<?php
    include 'connect.php';

if(isset($_POST['btn_add_result']))
{
    $add_stu_name = isset($_POST['add_stu_name']) ? $_POST['add_stu_name'] : " ";
    $add_stud_id = isset($_POST['add_stud_id']) ? $_POST['add_stud_id'] : " ";
    $add_stu_year = isset($_POST['add_stu_year']) ? $_POST['add_stu_year'] : " ";
    $add_stu_house = isset($_POST['add_house']) ? $_POST['add_house'] : " ";

    $marks1 = $_POST['add_marks1'];
    $marks2 = $_POST['add_marks2'];
    $marks3 = $_POST['add_marks3'];
    $marks4 = $_POST['add_marks4'];
    $marks5 = $_POST['add_marks5'];
    $marks6 = $_POST['add_marks6'];
    $marks7 = $_POST['add_marks7'];

    $total_marks_obtained = $marks1 + $marks2 + $marks3 + $marks4 + $marks5 + $marks6 + $marks7;
    $percentage = ($total_marks_obtained/700) * 100;

    $sql_add_student = "INSERT INTO student(stud_name,stud_id,stu_year,house) VALUES('$add_stu_name','$add_stud_id','$add_stu_year','$add_stu_house')";
    $sql_add_marks = "INSERT INTO marks(sub_name,marks,stud_id,stu_year) 
    VALUES ('Astronomy','$marks1','$add_stud_id','$add_stu_year'),
    ('Charms','$marks2','$add_stud_id','$add_stu_year'),
    ('Defense Against the Dark Arts','$marks3','$add_stud_id','$add_stu_year'),
    ('Herbology','$marks4','$add_stud_id','$add_stu_year'),
    ('History of Magic','$marks5','$add_stud_id','$add_stu_year'),
    ('Potions','$marks6','$add_stud_id','$add_stu_year'),
    ('Transfiguration','$marks7','$add_stud_id','$add_stu_year')";

    $sql_add_percentage = "INSERT INTO exam_result(marks_obtained, percentage, total_marks, stu_year, uid) VALUES('$total_marks_obtained','$percentage', '700', '$add_stu_year','$add_stud_id')";
    
    mysqli_query($connection,$sql_add_student);
    

    if(mysqli_query($connection,$sql_add_marks))
    {
        ?>
        <script> alert('Result added successfully!');</script>
        <?php
    }
    else{
        ?>
        <script> alert('Failed to add result!');</script>
        <?php
    }

    mysqli_query($connection,$sql_add_percentage);
    
    
}

if(isset($_POST['btn_delete']))
{
    $del_stu_name = isset($_POST['stu_name']) ? $_POST['stu_name'] : " ";
    $del_stud_id = isset($_POST['del_stud_id']) ? $_POST['del_stud_id'] : " ";
    $del_stu_year = isset($_POST['del_stu_year']) ? $_POST['del_stu_year'] : " ";

    $sql_delete_result = "DELETE FROM exam_result WHERE uid = '$del_stud_id' AND stu_year = '$del_stu_year'";
    $sql_delete_marks = "DELETE FROM marks WHERE stud_id = '$del_stud_id' AND stu_year = '$del_stu_year'";

    if(mysqli_query($connection,$sql_delete_marks))
    {
        ?>
        <script>alert('Result Deleted Successfully!');</script>
        <?php
    }

    else{
        ?>
        <script> alert('Failed to delete result!');</script>
        <?php
    }
    mysqli_query($connection,$sql_delete_result);
}


if(isset($_POST['edit_name']))
{
    $input_stud_id = isset($_POST['stud_id']) ? $_POST['stud_id'] : " ";
    $input_stu_year = isset($_POST['stu_year']) ? $_POST['stu_year'] : " ";

    $modify_name = isset($_POST['modify_name']) ? $_POST['modify_name'] : " ";

    $sql_modify_name = "UPDATE student SET stud_name = '$modify_name' WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year'";

    if(mysqli_query($connection,$sql_modify_name))
    {
        ?>
        <script>alert('Name edited Successfully!');</script>
        <?php
    }
    else{
        ?>
        <script> alert('Failed to edit name!');</script>
        <?php
    }
}

if(isset($_POST['edit_stu_id']))
{
    $input_stud_id = isset($_POST['stud_id']) ? $_POST['stud_id'] : " ";
    $input_stu_year = isset($_POST['stu_year']) ? $_POST['stu_year'] : " ";

    $modify_id = isset($_POST['modify_id']) ? $_POST['modify_id'] : " ";

    $sql_modify_id1 = "UPDATE student SET stud_id = '$modify_id' WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year'";
    $sql_modify_id2 = "UPDATE exam_result SET uid = '$modify_id' WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
    $sql_modify_id3 = "UPDATE marks SET stud_id = '$modify_id' WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year'";

    if(mysqli_query($connection,$sql_modify_id1))
    {
        ?>
        <script>alert('ID edited Successfully!');</script>
        <?php
    }
    else{
        ?>
        <script> alert('Failed to edit ID!');</script>
        <?php
    }
    mysqli_query($connection,$sql_modify_id2);
    mysqli_query($connection,$sql_modify_id3);
}

if(isset($_POST['edit_year']))
{
    $input_stud_id = isset($_POST['stud_id']) ? $_POST['stud_id'] : " ";
    $input_stu_year = isset($_POST['stu_year']) ? $_POST['stu_year'] : " ";

    $modify_year = isset($_POST['modify_year']) ? $_POST['modify_year'] : " ";

    $sql_modify_year1 = "UPDATE student SET stu_year = '$modify_year' WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year'";
    $sql_modify_year2 = "UPDATE exam_result SET stu_year = '$modify_year' WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
    $sql_modify_year3 = "UPDATE marks SET stu_year = '$modify_year' WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year'";

    if(mysqli_query($connection,$sql_modify_year1))
    {
        ?>
        <script>alert('Year edited Successfully!');</script>
        <?php
    }
    else{
        ?>
        <script> alert('Failed to edit year!');</script>
        <?php
    }
    mysqli_query($connection,$sql_modify_year2);
    mysqli_query($connection,$sql_modify_year3);
}

if(isset($_POST['edit_house']))
{
    $input_stud_id = isset($_POST['stud_id']) ? $_POST['stud_id'] : " ";
    $input_stu_year = isset($_POST['stu_year']) ? $_POST['stu_year'] : " ";

    $modify_house = isset($_POST['modify_house']) ? $_POST['modify_house'] : " ";

    $sql_modify_house = "UPDATE student SET house = '$modify_house' WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year'";

    if(mysqli_query($connection,$sql_modify_house))
    {
        ?>
        <script>alert('House edited Successfully!');</script>
        <?php
    }
    else{
        ?>
        <script> alert('Failed to edit house!');</script>
        <?php
    }
}

if(isset($_POST['edit_marks1']))
{
    $input_stud_id = isset($_POST['stud_id']) ? $_POST['stud_id'] : " ";
    $input_stu_year = isset($_POST['stu_year']) ? $_POST['stu_year'] : " ";

    $modify_marks1 = isset($_POST['modify_marks1']) ? $_POST['modify_marks1'] : "";

    $sql_modify_marks1 = "UPDATE marks SET marks = '$modify_marks1' WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year' AND sub_name = 'Astronomy'";


    if(mysqli_query($connection,$sql_modify_marks1))
    {
        ?>
        <script>alert('Marks edited Successfully!');</script>
        <?php
    }
    else{
        ?>
        <script> alert('Failed to edit marks!');</script>
        <?php
    }
}

if(isset($_POST['edit_marks2']))
{
    $input_stud_id = isset($_POST['stud_id']) ? $_POST['stud_id'] : " ";
    $input_stu_year = isset($_POST['stu_year']) ? $_POST['stu_year'] : " ";

    $modify_marks2 = isset($_POST['modify_marks2']) ? $_POST['modify_marks2'] : "";

    $sql_modify_marks2 = "UPDATE marks SET marks = '$modify_marks2' WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year' AND sub_name = 'Charms'";

    if(mysqli_query($connection,$sql_modify_marks2))
    {
        ?>
        <script>alert('Marks edited Successfully!');</script>
        <?php
    }
    else{
        ?>
        <script> alert('Failed to edit marks!');</script>
        <?php
    }

}

if(isset($_POST['edit_marks3']))
{
    $input_stud_id = isset($_POST['stud_id']) ? $_POST['stud_id'] : " ";
    $input_stu_year = isset($_POST['stu_year']) ? $_POST['stu_year'] : " ";

    $modify_marks3 = isset($_POST['modify_marks3']) ? $_POST['modify_marks3'] : "";

    $sql_modify_marks3 = "UPDATE marks SET marks = '$modify_marks3' WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year' AND sub_name = 'Defense Against the Dark Arts'";

    if(mysqli_query($connection,$sql_modify_marks3))
    {
        ?>
        <script>alert('Marks edited Successfully!');</script>
        <?php
    }
    else{
        ?>
        <script> alert('Failed to edit marks!');</script>
        <?php
    }
}

if(isset($_POST['edit_marks4']))
{
    $input_stud_id = isset($_POST['stud_id']) ? $_POST['stud_id'] : " ";
    $input_stu_year = isset($_POST['stu_year']) ? $_POST['stu_year'] : " ";

    $modify_marks4 = isset($_POST['modify_marks4']) ? $_POST['modify_marks4'] : "";

    $sql_modify_marks4 = "UPDATE marks SET marks = '$modify_marks4' WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year' AND sub_name = 'Herbology'";

    if(mysqli_query($connection,$sql_modify_marks4))
    {
        ?>
        <script>alert('Marks edited Successfully!');</script>
        <?php
    }
    else{
        ?>
        <script> alert('Failed to edit marks!');</script>
        <?php
    }
}

if(isset($_POST['edit_marks5']))
{
    $input_stud_id = isset($_POST['stud_id']) ? $_POST['stud_id'] : " ";
    $input_stu_year = isset($_POST['stu_year']) ? $_POST['stu_year'] : " ";

    $modify_marks5 = isset($_POST['modify_marks5']) ? $_POST['modify_marks5'] : "";

    $sql_modify_marks5 = "UPDATE marks SET marks = '$modify_marks5' WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year' AND sub_name = 'History of Magic'";

    if(mysqli_query($connection,$sql_modify_marks5))
    {
        ?>
        <script>alert('Marks edited Successfully!');</script>
        <?php
    }
    else{
        ?>
        <script> alert('Failed to edit marks!');</script>
        <?php
    }
}

if(isset($_POST['edit_marks6']))
{
    $input_stud_id = isset($_POST['stud_id']) ? $_POST['stud_id'] : " ";
    $input_stu_year = isset($_POST['stu_year']) ? $_POST['stu_year'] : " ";

    $modify_marks6 = isset($_POST['modify_marks6']) ? $_POST['modify_marks6'] : "";

    $sql_modify_marks6 = "UPDATE marks SET marks = '$modify_marks6' WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year' AND sub_name = 'Potions'";

    if(mysqli_query($connection,$sql_modify_marks6))
    {
        ?>
        <script>alert('Marks edited Successfully!');</script>
        <?php
    }
    else{
        ?>
        <script> alert('Failed to edit marks!');</script>
        <?php
    }
}

if(isset($_POST['edit_marks7']))
{
    $input_stud_id = isset($_POST['stud_id']) ? $_POST['stud_id'] : " ";
    $input_stu_year = isset($_POST['stu_year']) ? $_POST['stu_year'] : " ";

    $modify_marks7 = isset($_POST['modify_marks7']) ? $_POST['modify_marks7'] : "";

    $sql_modify_marks7 = "UPDATE marks SET marks = '$modify_marks7' WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year' AND sub_name = 'Transfiguration'";

    if(mysqli_query($connection,$sql_modify_marks7))
    {
        
        ?>
        <script>alert('Marks edited Successfully!');</script>
        <?php
    }
    else{
        ?>
        <script> alert('Failed to edit marks!');</script>
        <?php
    }
}
?>

    
