
<form method="post" action="lazybonedriver.php" >
<?php       

if (isset($_POST['insert'])){
    $adivse=$_POST['adv'];
    $link=@mysqli_connect(
        'localhost',
        'root',
        '',
        'lazybones');
    $query="INSERT INTO `advi`(`advise`) VALUES ('$adivse')";
    $result=mysqli_query($link,$query);
    mysqli_close($link);
}
?>









<style>
        html {
            height: 100%;
        }

        body {
            background-image: url(https://images.pexels.com/photos/2705755/pexels-photo-2705755.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500);
            background-repeat: no-repeat;
            background-attachment:fixed ;
            background-position ;
            background-size: cover;
        }
      
</style>
<br/><br/><br/>
<div class=style.css style='text-align:center; line-height:100px'><font face="DFKai-sb"  color="white" size="100px" align="center">司機專區
</font>

</div>

<br/><br/>
<font face="DFKai-sb"  color="white" align="left">
<font face="DFKai-sb"  color="white"  align="left" >
    <h1>ㄧ、關於司機</h1>
    <h3>LazyBone為您提供的司機都是經過專業訓練、考試、篩選出來的專業人員<br/>
    在載客的方面有豐富的經驗，並且LazyBone提供個性化的的服務</br>
    可以從司機性別以及司機個性來去做選擇，幫您找到最適合您的司機。</br>
    </br></br></br>
    <h1>二、提供回饋</h1>
    <form method="post" action="lazybonedriver.php" >
    <h3>請給我們關於司機的建議，或是讚美、投訴某位司機：</h3>
    <textarea name="adv"rows="8"cols="80"></textarea>
    <button type="submit" name=insert >傳送</button>
</h3>
</font>

 