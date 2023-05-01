<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="stylesheet.css" rel="stylesheet">
        <style>
            td{
                text-align: center;
                padding: 10px;
            }

            th{
                height: 50px;
                padding: 20px;
            }

            table{
                width:80%;
                font-size:40px;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                align:center;
                border: 2px solid purple;
            }
            
            th, td{
                border-bottom: 1px solid #000000;
            }

            #no_border{
                border: 0px;
            }

            #row_hover:hover {background-color: #4B0150;
            color:white;}

            .center {
                margin-left: auto;
                margin-right: auto;
            }

            body{
                background-image: url("https://img.freepik.com/premium-photo/old-parchment-paper-texture-background-vintage-wallpaper_118047-11703.jpg?w=2000");

                background-attachment:fixed;
                background-repeat: no-repeat;
                background-size:100%;
            }

            #head{
                font-size:100px;
                position: relative;
                top:125px;
                left:10%;
                text-shadow: 0 0 10px #4B0150;
            }

            #logo{
                position: relative;
                top:20px;
                left:38%;
                height:250px;
                width:450px;
                align:center;
            }

            #table_1{  
                    text-align:left;
            }

            .btn_logout{
                font-size:20px;
                position: fixed;
                top: 15px;
                right: 20px;
                display: inline-block;
            }

        </style>
    </head>
</html>


<?php
include 'connect.php'; //File which connects the database

if(isset($_POST['btn_result']))
{
    $stud_id=$_POST['stud_id'];
    $stu_year=$_POST['stu_year'];

    $sql_insert_info = "INSERT INTO result_login(stud_id,stu_year) VALUES('$stud_id','$stu_year')";

    mysqli_query($connection,$sql_insert_info);
    
    $sql_student_info = "SELECT stud_name, stud_id, stu_year, house FROM student WHERE stud_id = '$stud_id' AND stu_year = '$stu_year'";
	$sql_subject_marks = "SELECT sub_name, marks FROM marks WHERE stud_id = '$stud_id' AND stu_year = '$stu_year'";
	$sql_total_marks = "SELECT percentage, marks_obtained, total_marks FROM exam_result WHERE uid = '$stud_id' AND stu_year = '$stu_year'";
	
	$query1 = mysqli_query($connection, $sql_student_info);
	$query2 = mysqli_query($connection, $sql_subject_marks);
	$query3 = mysqli_query($connection, $sql_total_marks);
	
	$num_row = mysqli_num_rows($query2);
	
	$array1 = mysqli_fetch_array($query1);
	$array3 = mysqli_fetch_array($query3);
	?>
	
	<p id="head"> Hogwarts School of Witchcraft and Wizardry</p><br>
	<img id="logo" class="center" src="https://logolook.net/wp-content/uploads/2021/11/Hogwarts-Logo.png" height="150px" width="250px"></img>

    <br><br><br><br>
	
	<table id="table_1" style="text-align:left; font-size:50px" border="3px">
	    <tr>
	        <td id="no_border"><?php echo "NAME - " .$array1['stud_name'];?></td>
	        <td id="no_border"><?php echo "YEAR - " .$array1['stu_year'];?></td>
	    </tr>
	    <tr>
	        <td id="no_border"><?php echo "UID - " .$array1['stud_id'];?></td>
	        <td id="no_border"><?php echo "HOUSE - " .$array1['house'];?></td>
	    </tr>
	</table>

    <br><br><br>
	
	<table id="table_2" cellspacing="10" cellpadding="10">
	<thead>
	    <tr id= "row_hover">
	        <th>No.</th>
            <th>Subjects</th>
            <th>Marks Obtained</th>
            <th>Total</th>
	    </tr>
	</thead>
	<tbody>
	<?php
	$total = 100;
    $i = 1;
	
	while($array2 = mysqli_fetch_array($query2)){
		?>
		<tr id= "row_hover">
        <td><?php echo $i;?> </td>
		<td><?php echo $array2['sub_name'];?> </td>
		<td><?php echo $array2['marks'];?> </td>
		<td><?php echo $total;?></td>
		</tr>
		<?php
        $i += 1;
	}

	?>
    <tr id= "row_hover">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr id= "row_hover">
        <td colspan="2">Percentage</td>
        <td>Marks obtained</td>
        <td>Total Marks</td>
    </tr>
	<tr id= "row_hover">
		<td colspan="2"><?php echo $array3['percentage'];?></td>
		<td><?php echo $array3['marks_obtained'];?></td>
		<td><?php echo $array3['total_marks'];?></td>
	</tbody>
	</table>

    <form method="post" action="insert_data.php">
    <button type="submit" class="btn_logout" name="btn_logout" id="btn_logout" decoration="none" style="font-size:20px;" > LOGOUT </button>
</form>
	<?php
}

if(isset($_POST['btn_logout']))
{
    header("location: login.php");
}
?>