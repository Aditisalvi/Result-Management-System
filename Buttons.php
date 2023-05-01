<!DOCTYPE html>
<html>
<head>
    <style>
    </style>
<script type="text/javascript" src="jQuery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#button1").click(function(){
    $("#form1").toggle();
    });

    $("#button2").click(function(){
    $("#form2").toggle();
    });

    $("#button3").click(function(){
    $("#form3").toggle();
    });
});
/*
$(document).ready(function(){
    $(tag).click(function(){
        $("#id").event();
    });
});

    $("#button2").click(function(){
    $("#form2").toggle();});

    $("#button3").click(function(){
    $("#form3").toggle();});

    $(document).ready(function(){
  $("button").click(function(){
    $("p").toggle();
  });
});

*/

</script>
</head>
<body>
    <button type="submit" id="button1" >button 1</button>
    <button type="submit" id="button2" >button 2</button>
    <button type="submit" id="button3" >button 3</button>

    <form id="form1">
        <label>KAGUYA</label>
        <input type="text">
    </form>
    <form id="form2">
        <label>KEI</label>
        <input type="text">
    </form>
    <form id="form3">
        <label>KAZU</label>
        <input type="text">
    </form>
</body>
</html>