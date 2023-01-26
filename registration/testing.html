<!Doctype html>
<?php

//mysqli connectivity, select database
$connect= new mysqli("localhost","root","","demo") or die("ERROR:could not connect to the database!!!");

//extract all html field
extract($_POST);
if(isset($save))
{
//store textarea values in <pre> tag
$msg="<pre>$a</pre>";

//insert values in textarea table
$query="insert into textarea values('','$e','$msg')";
$connect->query($query);
echo "Data saved";	

}

//click on display button to show all values entered by you
if(isset($disp))
{
	$query="select * from textarea";
	$result=$connect->query($query);
	echo "<table border=1>";
	echo "<tr><th>Email</th><th>Message</th></tr>";
	while($row=$result->fetch_array())
		{
		echo "<tr>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['message']."</td>";
		echo "</tr>";
		}
	echo "</table>";	
}
?>








<html>
    <body>
<style>
    input,textarea{width:250px}
    textarea{height:200px}
    input[type=submit]{width:150px}
</style>

    <form method="post">
    <table width="200" border="1">
      
      <tr>
        <td>Email</td>
        <td><input type="email" name="e" placeholder="email" /></td>
      </tr>
     
      
      <tr>
        <td>Message</td>
        <td><textarea placeholder="contents"  name="a"></textarea></td>
      </tr>
      <tr>
        <td colspan="2">
            <input type="submit" value="Save" name="save"/>
            <input type="submit" value="Display" name="disp"/>
        </td>
      </tr>
      
    </table>
    </form>
    </body>
</html>