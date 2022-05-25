
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<img src="https://player.vimeo.com/external/452794600.sd.mp4?s=52f961ecfe8903b76b0b7f709c4e195b9b3dbdef&profile_id=139&oauth2_token_id=57447761" width="1450px"height="820px" />


<?php 
   


if (isset($_POST['insert'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $link=@mysqli_connect(
        'localhost',
        'root',
        '',
        'lazybones');
    
    $query="INSERT INTO `login`(`name`, `password`) VALUES ('$name','$password')";
    $result=mysqli_query($link,$query);
    
    header("Location:http://localhost/lazybone/lazybone_2.php");
    mysqli_close($link);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<img src="https://player.vimeo.com/external/452794600.sd.mp4?s=52f961ecfe8903b76b0b7f709c4e195b9b3dbdef&profile_id=139&oauth2_token_id=57447761" width="1450px"height="820px" />
 
<form method="post" action="lazybone.php"  class="login">
    <h1>啟動您的LazyBone</h1>
    <h2>使用者名稱</h2>
    <input typoe="test" name='name'placeholder="請輸入名稱">
    
    <h2>密碼</h2>
    <input type="password" name='password'id="password"placeholder="請輸入密碼">
    <br></br>
    <button type="submit" name=insert >開始</button>
</from> 


</body>
</html>

