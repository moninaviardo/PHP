<?php

include("connections.php");
$user_id = $_POST["user_id"];

mysqli_query($conn,"DELETE FROM mytbl WHERE id='$user_id'");

echo"<script language='javascript'>alert('Record deleted!')</script>";
echo"<script>window.location.href='index.php';</script>";
?>

<form method="POST" action="DeleteNow.php">
<input type="hidden" name="user_id" value="<?php echo $user_id;?>"><br>

<br>
<br>
<input type="submit" value="Yes"> &nbsp; <a href='index.php'>No</a>
</form>