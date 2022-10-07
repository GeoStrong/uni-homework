<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>გიორგი ჯობავა</title>
    
</head>
<style>
body {
  background-image: url('images/jpg22.jpg');
}
</style>

    <div class="container">
        <form class="form-signin" method="POST" >
            <h2>ავტორიზაცია</h2>
            

            <input type="text" name="username" class="form-control" placeholder="მომხარებლის სახელი" required>
            <input type="password" name="password" class="form-control" placeholder="პაროლი" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">შესვლა</button>
            <a href="index.php" class="btn btn-lg btn-primary btn-block">რეგისტრაცია</a>
            
        </form>
    </div>

    <div class = "element">
</div>
<h5>გადასვლა:<br>
	
			<a  class="menu" href="index.php">registration</a><br>
			<a  class="menu" href="main.php">Main</a><br>
			<a  class="menu" href="upload.php">Upload</a><br>
			<a  class="menu" href="witcher.php">About Witcher 3</a><br> </h5>
<?php 
session_start();
require('connect.php');

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if($count == 1) {
        $_SESSION['username'] = $username;
    } else{
        $fmsg = "Error";
    }
}

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo " მოგესალმებით " . $username . "";
    echo "<a href='logout.php' class='btn btn-lg btn-primary'>Logout</a>";
}

?>

</body>
</html>
<?php
    require_once("footer.php");
?>
