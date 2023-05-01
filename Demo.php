<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
                .AnimatedStarfield_root__2u2wB {    font-size: 18px;
    font-weight: 300;
    line-height: 24px;
    font-family: Sofia Pro,serif;
    color: #fff;
    position: relative;
    min-height: 100vh;
                }

                .AnimatedStarfield_starContainer__DixZt {
                    font-size: 18px;
    font-weight: 300;
    line-height: 24px;
    font-family: Sofia Pro,serif;
    color: #fff;
    position: absolute;
    overflow: hidden;
    bottom: 0;
    right: 0;
    top: 0;
    left: 0;}

    .AnimatedStarfield_stars1__3cdHs {
        font-size: 18px;
    font-weight: 300;
    line-height: 24px;
    font-family: Sofia Pro,serif;
    color: #fff;
    transform: scale(-1);
    width: 100%;
    height: 100%;
    }

    .AnimatedStarfield_stars2__35QCY {
        font-size: 18px;
    font-weight: 300;
    line-height: 24px;
    font-family: Sofia Pro,serif;
    color: #fff;
    width: 100%;
    height: 100%;}

    .AnimatedStarfield_stars3__1_3G0 {
        font-size: 18px;
    font-weight: 300;
    line-height: 24px;
    font-family: Sofia Pro,serif;
    color: #fff;
    width: 100%;
    height: 100%;}

    .AnimatedStarfield_stars4__2XO4U {
        font-size: 18px;
    font-weight: 300;
    line-height: 24px;
    font-family: Sofia Pro,serif;
    color: #fff;
    width: 100%;
    height: 100%;}
        </style>


------------------------
        <style>
            a {
                z-index: 1;
                background-color: #ffca7a;/*transparent;*/
                position: relative;
                display: inline-block;
                font-size: 16px;
                padding: 15px 34px;
                color: #000000;
                text-decoration: none;
                font-weight: bold;
                border: solid 5px #44027a; 
                box-shadow: 12px 12px 0  -5px #44027a;
                transition: .10s;
                overflow: hidden;
                text-transform: uppercase;
                letter-spacing: 2px;
            }

            a:before {
            display: inline-block;
            transition: bottom, 0.35s;
            position: absolute;
            transform: skew(-50deg);
            top: 0px;
            left: 260px;
            color:#ffffff;
            background-color: #44027a;
            content: "　";
            width: 220px;
            height: 120px;
            z-index: -1;
            }

            a:hover {
            box-shadow: 0px 0px 0 0px #44027a;
            color:#ffffff;
            }

            a:hover:before {
            top: -40px;
            left: -40px;
            }

            .bookends {
  position: relative;
  border-width: 5px;
  border-color: hsl(0, 0%, 50%) transparent;
  height: 11px;
  border-style: double;
  width: 20%;
}
.bookends:before,
.bookends:after {
  position: absolute;
  bottom: -3.536px;
  width: 7.071px;
  height: 7.071px;
  display: block;
  border-width: 0 7.071px 7.071px 0;
  border-color: hsl(0, 0%, 50%);
  border-style: double;
  box-sizing: border-box;
}
.bookends:before {
  transform: translateZ(0) rotate(-45deg);
  left: -21px;
}
.bookends:after {
  transform: translateZ(0) rotate(135deg);
  right: -21px;
}

.bookends-dots {
  position: relative;
  border-bottom: 1px solid hsla(0, 0%, 50%, 0.75);
  width: 50%;
}
.bookends-dots:before,
.bookends-dots:after {
  position: absolute;
  bottom: -5px;
  width: 10px;
  height: 10px;
  display: block;
  border-width: 0 1px 1px 0;
  border-color: hsla(0, 0%, 50%, 0.75);
  border-style: solid;
  box-sizing: border-box;
  border-radius: 100%;
}
.bookends-dots:before {
  transform: translateZ(0) rotate(-45deg);
  left: -10px;
}
.bookends-dots:after {
  transform: translateZ(0) rotate(135deg);
  right: -10px;
}

.flair {
  width: 65%;
  height: 30px;
  border-style: solid;
  border-color: hsla(0, 0%, 75%, 0.9);
  border-width: 1px 0 0 0;
  border-radius: 15px;
}
.flair:before {
  display: block;
  height: 30px;
  margin-top: -31px;    
  border-style: solid;
  border-color: hsla(0, 0%, 75%, 0.9);
  border-width: 0 0 1px 0;
  border-radius: 15px;
}



        </style>
    </head>
    <body>
    <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
<a href="#"> LOGIN </a>
<hr class="bookends">
<hr class="bookends-dots">
<hr class="flair">
    </body>
</html>
<?php

$sql_fetch_totalmarks = "SELECT marks_obtained FROM exam_result WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
mysqli_query($connection,$sql_fetch_totalmarks);

$sql_fetch_marks1 = "SELECT marks FROM marks WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year' AND sub_name = 'Astronomy'";
mysqli_query($connection,$sql_fetch_marks1);

$total_marks_obtained = ($sql_fetch_totalmarks - $sql_fetch_marks1) + $modify_marks1;
$percentage = ($total_marks_obtained/700) * 100;

$sql_add_percentage = "UPDATE exam_result SET percentage = '$percentage', marks_obtained = '$total_marks_obtained' WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
mysqli_query($connection,$sql_add_percentage);


---------


$sql_fetch_totalmarks = "SELECT marks_obtained FROM exam_result WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
    mysqli_query($connection,$sql_fetch_totalmarks);

    $sql_fetch_marks2 = "SELECT marks FROM marks WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year' AND sub_name = 'Charms'";
    mysqli_query($connection,$sql_fetch_marks2);

    $total_marks_obtained = ($sql_fetch_totalmarks - $sql_fetch_marks2) + $modify_marks2;
    $percentage = ($total_marks_obtained/700) * 100;

    $sql_add_percentage = "UPDATE exam_result SET percentage = '$percentage', marks_obtained = '$total_marks_obtained' WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
    mysqli_query($connection,$sql_add_percentage);


--------


$sql_fetch_totalmarks = "SELECT marks_obtained FROM exam_result WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
    mysqli_query($connection,$sql_fetch_totalmarks);

    $sql_fetch_marks3 = "SELECT marks FROM marks WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year' AND sub_name = 'Defense Against the Dark Arts'";
    mysqli_query($connection,$sql_fetch_marks3);

    $total_marks_obtained = ($sql_fetch_totalmarks - $sql_fetch_marks3) + $modify_marks3;
    $percentage = ($total_marks_obtained/700) * 100;

    $sql_add_percentage = "UPDATE exam_result SET percentage = '$percentage', marks_obtained = '$total_marks_obtained' WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
    mysqli_query($connection,$sql_add_percentage);


----------


$sql_fetch_totalmarks = "SELECT marks_obtained FROM exam_result WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
    mysqli_query($connection,$sql_fetch_totalmarks);

    $sql_fetch_marks4 = "SELECT marks FROM marks WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year' AND sub_name = 'Herbology'";
    mysqli_query($connection,$sql_fetch_marks4);

    $total_marks_obtained = ($sql_fetch_totalmarks - $sql_fetch_marks4) + $modify_marks4;
    $percentage = ($total_marks_obtained/700) * 100;

    $sql_add_percentage = "UPDATE exam_result SET percentage = '$percentage', marks_obtained = '$total_marks_obtained' WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
    mysqli_query($connection,$sql_add_percentage);


-----------


$sql_fetch_totalmarks = "SELECT marks_obtained FROM exam_result WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
    mysqli_query($connection,$sql_fetch_totalmarks);

    $sql_fetch_marks5 = "SELECT marks FROM marks WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year' AND sub_name = 'History of Magic'";
    mysqli_query($connection,$sql_fetch_marks5);

    $total_marks_obtained = ($sql_fetch_totalmarks - $sql_fetch_marks5) + $modify_marks5;
    $percentage = ($total_marks_obtained/700) * 100;

    $sql_add_percentage = "UPDATE exam_result SET percentage = '$percentage', marks_obtained = '$total_marks_obtained' WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
    mysqli_query($connection,$sql_add_percentage);


-----------


$sql_fetch_totalmarks = "SELECT marks_obtained FROM exam_result WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
    mysqli_query($connection,$sql_fetch_totalmarks);

    $sql_fetch_marks6 = "SELECT marks FROM marks WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year' AND sub_name = 'Potions'";
    mysqli_query($connection,$sql_fetch_marks6);

    $total_marks_obtained = ($sql_fetch_totalmarks - $sql_fetch_marks6) + $modify_marks6;
    $percentage = ($total_marks_obtained/700) * 100;

    $sql_add_percentage = "UPDATE exam_result SET percentage = '$percentage', marks_obtained = '$total_marks_obtained' WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
    mysqli_query($connection,$sql_add_percentage);



----------


$sql_fetch_totalmarks = "SELECT marks_obtained FROM exam_result WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
    mysqli_query($connection,$sql_fetch_totalmarks);

    $sql_fetch_marks7 = "SELECT marks FROM marks WHERE stud_id = '$input_stud_id' AND stu_year = '$input_stu_year' AND sub_name = 'Transfiguration'";
    mysqli_query($connection,$sql_fetch_marks7);

    $total_marks_obtained = ($sql_fetch_totalmarks - $sql_fetch_marks7) + $modify_marks7;
    $percentage = ($total_marks_obtained/700) * 100;

    $sql_add_percentage = "UPDATE exam_result SET percentage = '$percentage', marks_obtained = '$total_marks_obtained' WHERE uid = '$input_stud_id' AND stu_year = '$input_stu_year'";
    mysqli_query($connection,$sql_add_percentage);

