<?php
include('includes/header.php');
include('connection.php');
  
  <form class="" action="" method="post" autocomplete="off">
    <label for=""><font color="red"><b>Төлбөр</b></font></label>
    <input class="form-control" type="number" onfocus="this.value=''" name="payment" required value="">
    <br>
    <button type="submit" name="submit"><font color="blue">Мэдээллийн сан руу илгээ</font></button>
  </form>
<?php
  echo "<b>Төлбөр хийсний дараа</b>";
  echo "<br>";  
  echo "&nbsp &nbsp &nbsp id: ".$id;
  echo "<br>";  
  echo "&nbsp &nbsp &nbsp UID: ".$UID;
  echo "<br>";  
  echo "&nbsp &nbsp &nbsp Хийгдсэн төлбөр: ".$paidMoney;
  echo "<br>";  
  echo "&nbsp &nbsp &nbsp Одоо байгаа үлдэгдэл: ".($paymentPrevious+$paidMoney);  

  echo "<br>";  
  echo "<br>";  
  echo "<br>";  
  echo "Анхааруулга: Reload болон F5 товчлуур дээр дарж болохгүй.";

?>
<?php include('includes/footer.php'); ?>