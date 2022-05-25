<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="carstyle.css">
</head>
<body>
<style>
        html {
            height: 100%;
        }

        body {
            background-image: url(https://images.pexels.com/photos/5647641/pexels-photo-5647641.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500);
            background-repeat: no-repeat;
            background-attachment:fixed ;
            background-position ;
            background-size: cover;
        }
      
    </style>
     
<h2><font face="DFKai-sb" color="black"><span style="background-color:white;margin-right:5px;">親愛的用戶您好，歡迎來到LazyBone<font color="white">_______________________________________________________________________</font></span></font></h2>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<font face="DFKai-sb" color="white"><h2>註冊簡單、價錢公道、專業駕駛</h2><br/>
在這個對生活品質要求越來越高的社會</br>
人們出門漸漸的都不自行騎車或開車，</br>
除了路上攔車之外，最常用的就是網路叫車</br></br>
而Lazybone是目前國內最火紅的叫車服務系統，</br>
除了搜尋附近司機以外，您也能指定喜歡的司機。</br></br>
只需要簡單幾個步驟即可輕鬆叫車  </font>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <hr size="5px"  width="100%" color="white">
    <font color="white"><h1>啟動步驟<h1></font>
    <br/>
    <image src="pexels-photo-5083010.jpg"width="700" height="450">
    <h3><font color="white"><p>步驟一：填寫你的位置、人數</p></font> </h3>
 
    <br/><br/>
    <image src=" pexels-photo-1005162.jpg"width="700" height="450">
  
    <h3><font color="white"><p>步驟二： 選擇你的司機、車輛級別</p></font> </h3>
    <br/><br/>
    <image src=" pexels-photo-1399282.jpg"width="700" height="450">
  
    <h3><font color="white"><p> 步驟三：按下LazyBone，即可叫車</p></font> </h3>
    <br/><br/>

    <hr size="5px"  width="100%" color="white">

    <h1><font color="white"><p>點選下列介紹以了解更多</p></font> </h1>
    
<form method="post" class="login">
<button type="submit" formaction="http://localhost/lazybone/lazybonecar.php">車輛種類介紹</button>
    <br>
<button type="submit" formaction="http://localhost/lazybone/lazybonedriver.php">司機專區</button>
<br>
<button type="submit" formaction="http://localhost/lazybone/contact.php">聯絡我們</button>

</form>    
<br/>



<hr size="5px" width="100%" color="white">


<div>       
</div>


<font color="white"><h1>啟動LazyBone!</h1></font>
</br>
<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3747121.8181596487!2d120.0843006!3d23.4857501!3m2!1i1024!2i768!4f13.1!5e0!3m2!1szh-TW!2stw!4v1623170717452!5m2!1szh-TW!2stw" width="600" height="450"  allowfullscreen="ture" loading="lazy"style="display:block; margin:35px 20px 25px 10px;">

</iframe>

<body>
<form method="post" action="lazybone_2.php" class="login_i">



<?php 
   


if (isset($_POST['insert'])){
    $count=$_POST['count'];
    $cartype=$_POST['cartype'];
    $carlevel=$_POST['carlevel'];
    $driversex=$_POST['driversex'];
    $driverpny=$_POST['driverpny'];
    $address=$_POST['address'];
    
    $link=@mysqli_connect(
        'localhost',
        'root',
        '',
        'lazybones');
    
    $query="INSERT INTO `information`( `count`, `cartype`, `carlevel`, `driversex`, `driverpmy`, `address`) VALUES ('$count','$cartype','$carlevel','$driversex','$driverpny','$address')";
    $result=mysqli_query($link,$query);
    mysqli_close($link);
}

?>

<h4><div classl=out1 style='text-align:center; line-height:0'><font face="sans-serif" color="white" align="center">

人數：
<select name="count">
<option value="一人" selected="True">1</option>
<option value="二人" selected="True">2</option>
<option value="三人" selected="True">3</option>
<option value="四人" selected="True">4</option>
</select>
車種：
<select name="cartype">
<option value="中" selected="True">中</option>
<option value="大" selected="True">大</option>
</select>
車型：
<select name="carlevel">
<option value="normal" selected="True">Normal</option>
<option value="Premium" selected="True">Premium</option>
<option value="Boss" selected="True">Boss</option>
</select>
<br/>
司機：
<select name="driversex">
<option value="男生" selected="True">男生</option>
<option value="女生" selected="True">女生</option>
</select>
</select>
<select name="driverpny">
<option value="開朗活潑" selected="True">開朗活潑</option>
<option value="穩重少言" selected="True">穩重少言</option>
</select>
地址：<textarea name="address"rows="1px"cols="30"class="textarea"></textarea>
<br/></br>
<button type="submit" formaction=""class=".button" name=insert><b>LazyBone!<b></button>
</h4></font >
</from>

</body>
</div>




</body>
</html>
