<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <title>გიორგი ჯობავა</title>
    
</head>
<body>
<?php 
require('connect.php');

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO register (username, password, email) VALUES ('$username', '$password', '$email ')";
    $result = mysqli_query($connection,$query);

    if ($result){
        $smsg = "თქვენ წარმატებულად დარეგისტრირდით";
    } else {
        $fsmsg = "შეცდომა";
    }
}
?>


    <div class="container">
        <form class="form-signin" method="POST" >
            <h2>რეგისტრაცია</h2>
            <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"><?php echo $smsg; ?> </div><?php } ?>
            <?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"><?php echo $fsmsg; ?> </div><?php } ?>

            <input type="text" name="username" class="form-control" placeholder="მომხარებლის სახელი" required>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="პაროლი" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">registration</button>
            <a href="login.php" class="btn btn-lg btn-primary btn-block">login</a>
            
    </div>
</body>
</html>
