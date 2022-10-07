<html>
<head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/upl.css">
    <title>გიორგი ჯობავა</title>
    
</head>
<body>
    <div>
        <h2>აქ შეგიძლიათ ატვირტოთ თქვენი ფაილი</h2>
    </div>
<form method = "POST" action="" enctype="multipart/form-data">
<input type="file" name="file"><br>
<input type="submit" name="submit" value="ატვირთეთ ეს ფაილი">


<?php
if(isset($_POST['submit']) and $_FILES){
    move_uploaded_file($_FILES['file']['tmp_name'], "uploades/".$_FILES['file']['name']);
    echo "თქვენი ფაილი წარმატებით აიტვირთა";
} else echo "შეცდომა";
?> 

<?php $path = scandir("uploades");
foreach($path as $f){
    echo $f."<br>";
}

?>
<div id="menu">
    <ul>
      <li class="active"><a href="index.php">Registration</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="main.php">Main</a></li>
      <li><a href="witcher.php">About Witcher 3</a></li>
     
</html>
<?php
    require_once("footer.php");
?>
