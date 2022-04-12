<html>
<head>
<title>OPTION</title>
</head>
<body>
<form action="option.php" method="get">
Name :<select name="name">
<option value="name1">name1</option>
<option value="name2">name2</option>
<option value="name3">name3</option>
<option value="name4">name4</option>
</select><br>
<input type="submit" name="submit" value="Insert">
</form>
</body>
</html>
<?php
if(isset($_GET['submit']))
{
    $name=$_GET['name'];
    $c=mysqli_connect("localhost","root","test");
    mysqli_select_db("test");
    $ins=mysqli_query("insert into departments (dept_name) values ('$name')",$c);
    if($ins)
    {
        echo "<br>".$name."inserted";
    }
    else
    {
        echo mysqli_error();
    }
}
?>