<?php
include("connection.php");
$query = "SELECT * FROM users WHERE ((username = '$username' or email = '$username')  && password = '$password')";
 $run = mysqli_query($conn,$query);
 $data = mysqli_num_rows($run);
 $result = mysqli_fetch_assoc($run);
$image = $result['profile_pic'];

?>
<img src="<?php echo $image; ?>" alt="">