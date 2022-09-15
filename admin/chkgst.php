<?php
include '../connection.php';
$g=$_GET['g'];
$b=$_GET['b'];
$chk=mysqli_query($dbcon,"select * from demo_gst where gstn='$g' and bilnum='$b'");
echo mysqli_error($dbcon);
if(mysqli_num_rows($chk)>0)
{
    $rc=mysqli_fetch_row($chk);
    if($rc[3]=="1")
    {
        echo"<font color='green'>Bill Details verified and it is correct...</font>";
    }
    else
    {
        echo"<font color='orange'>Bill Details verified and it is Already used in this site...</font>"; 
    }
}
else
{
    echo"<font color='red'>Invalid Bill Details</font>";
}
?>