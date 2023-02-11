<?php

require 'config/config.php';
$password = md5("AAA@bbb123");
$date = date("Y-m-d");
$profile_pic = "assets/images/profile_pics/defaults/head_deep_blue.png";
$query = mysqli_query($con, "INSERT INTO users (id,first_name,last_name,username,email,password,signup_date,profile_pic,num_posts,num_likes	,user_closed,friend_array) VALUES ('', 'vignesh', 'eg', 'vignesh', 'vignesheg10@gmail.com', '$password', '$date', 'ok', '0', '0', 'no', ',')");
if($query == true){
    echo "ok";
}else{
    echo "no";
}
?>