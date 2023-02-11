<?php include("includes/header.php") ;
include("includes/classes/user.php");
include("includes/classes/post.php");
//session_destroy();

if(isset($_POST['post'])){
    $post = new post($con,$userLoggedIn);
    $post -> submitPost($_POST['post_text'],'none');
    header("location:index.php");
}


?>
<div class="bgelement" style="margin-left:13rem;">
<img src="<?php echo $userName['profile_pic']; ?>" >
<div class="usrdetails">
<span><?php echo $userName['username']; ?></span><br>
    <span>Num of posts - <?php echo $userName['num_posts'];?></span><br>
    <span>Num of likes - <?php echo $userName['num_likes'];?></span>
</div>
</div>
<!-- news feed div -->
<div class = "newsfeed">
    <form action="index.php" method= "POST">
    <textarea class="newsfeedel"  name="post_text" id="post_text" placeholder = "Got something to say?" ></textarea>
    <button name="post" type='submit' id="post_button" class="btn btn-primary pt-4 pb-4 ps-4 pe-4" >Post</button>
</form>

    <?php
     
     $post = new post($con,$userLoggedIn);
     $post->loadPostsFriends();
?>
</div>

</body>
</html>