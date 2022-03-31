<?php require "includes/link_style.php"; ?>

<!-- <form action="home.php" method="get">

<input type="text" name="username" placeholder="username"><br><br>
<input type="password" name="password" placeholder="password"><br><br>
<input type="submit" value="submit"> -->

<!-- login -->

<!-- <form action="login.php" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="submit" name="submit">
</form> -->

<!-- redirect -->

<!-- <form action="home.php" method="post">
    <input type="text" name="username" placeholder="username"><br><br>    
    <input type="password" name="password" placeholder="password"><br><br>    
    <input type="submit" value="submit" name="submit">    

</form> -->

<!-- uploading file -->

<form action="profile.php" method="post" enctype="multipart/form-data">
    <input type="file" name="profile" placeholder="username"><br><br>    
    <input type="submit" value="upload">    

</form>

<?php require 'includes/footer.php';?>
