<?php
session_start(); 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>rating</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<?php
// start a session
session_start();
?>
  <body>
<form method="post"> 
  <div class="continer-fluid">
  <table class="table table-dark ">
    
  <thead >
    <tr> 
        
       
        
        <th>ممتاز</th>
        <th>جيد جدا</th>
        <th>جيد</th>
        <th>سئ</th>
        <th>السؤال</th>
       
    </tr>
  </thead>
  <tbody>
  <tr>
    <?php 
    if(isset($_POST['value_rate1'])){
      $rate1=$_POST['value_rate1'];
      $result1=$rate1;
      
      
  }
    ?>
      <td><input type="radio" name="value_rate1"  value="10"></td>
      <td><input type="radio" name="value_rate1"  value="5"></td>
      <td><input type="radio" name="value_rate1"  value="3"></td>
      <td><input type="radio" name="value_rate1"  value="0"></td>
     
        <td> هل انت راضي علي الهدوء بالمستشفي؟</td>
      </tr>

    <tr>
      
    <?php 
    if(isset($_POST['value_rate2'])){
      $rate2=$_POST['value_rate2'];
      $result2=$rate2;
      
  }
    ?>
      <td><input type="radio" name="value_rate2"  value="10"></td>
      <td><input type="radio" name="value_rate2"  value="5"></td>
      <td><input type="radio" name="value_rate2"  value="3"></td>
      <td><input type="radio" name="value_rate2"  value="0"></td>
     
       
        <td>هل انت راضي علي اسعار الخدمات؟</td>
      </tr>
      <tr>
      
      <?php 
    if(isset($_POST['value_rate3'])){
      $rate3=$_POST['value_rate3'];
      $result3=$rate3;
      
  }
    ?>
      <td><input type="radio" name="value_rate3"  value="10"></td>
      <td><input type="radio" name="value_rate3"  value="5"></td>
      <td><input type="radio" name="value_rate3"  value="3"></td>
      <td><input type="radio" name="value_rate3"  value="0"></td>
     
       
        <td>هل انت راضي عن خدمة التمريض؟</td>
      </tr>
      <tr>
    
      <?php 
    if(isset($_POST['value_rate4'])){
      $rate4=$_POST['value_rate4'];
      $result4=$rate4;

      
  }
    ?>
      <td><input type="radio" name="value_rate4"  value="10"></td>
      <td><input type="radio" name="value_rate4"  value="5"></td>
      <td><input type="radio" name="value_rate4"  value="3"></td>
      <td><input type="radio" name="value_rate4"  value="0"></td>
      
      
        <td>هل انت راضي علي مستوي الدكاترة؟</td>
        
      </tr>
      <tr>
    <?php 
    if(isset($_POST['value_rate5'])){
      $rate5=$_POST['value_rate5'];
      $result5=$rate5;

      
  }
    ?>

      <td><input type="radio" name="value_rate5"  value="10"></td>
      <td><input type="radio" name="value_rate5"  value="5"></td>
      <td><input type="radio" name="value_rate5"  value="3"></td>
      <td><input type="radio" name="value_rate5"  value="0"></td>

      </form>
      
        <td> هل انت راضي علي الهدوء بالمستشفي؟</td>
      </tr>

      
    
  </tbody>
  
</table>
</form>



<?php    
$result= $result1+$result2+$result3+$result4+$result5;
if($rate1==0){
  echo "<table class='table'>
  <thead>
    <tr>
      
      <th scope='col'>question</th>
      
      <th scope='col'>Review</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>هل انت راضي علي الهدوء بالمستشفي؟</td>
      <td>bad</td>
 <br>";
}
elseif($rate1==3 )
{
  echo "<table class='table'>
  <thead>
    <tr>
      
      <th scope='col'>question</th>
      
      <th scope='col'>Review</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>هل انت راضي علي الهدوء بالمستشفي؟</td>
      <td>good</td>
 <br>";
}
elseif($rate1==5){
  echo "<table class='table'>
  <thead>
    <tr>
      
      <th scope='col'>question</th>
      
      <th scope='col'>Review</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>هل انت راضي علي الهدوء بالمستشفي؟</td>
      <td>verygood</td>
 <br>";
}
else{
  echo "<table class='table'>
  <thead>
    <tr>
      
      <th scope='col'>question</th>
      
      <th scope='col'>Review</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>هل انت راضي علي الهدوء بالمستشفي؟</td>
      <td>excelent</td>
 <br>";
}
/////////////////////////////
if($rate2==0){
  echo " <tr>
     
  <td>هل انت راضي علي اسعار الخدمات؟</td>
  <td>bad</td>
<br>";
}
elseif($rate2==3 )
{
  echo " <tr>
     
  <td>هل انت راضي علي اسعار الخدمات؟</td>
  <td>good</td>
<br>";
}
elseif($rate2==5){
  echo " <tr>
     
  <td>هل انت راضي علي اسعار الخدمات؟</td>
  <td>verygood</td>
<br>";
}
else{
  echo "
    <tr>
     
      <td>هل انت راضي علي اسعار الخدمات؟</td>
      <td>excelent</td>
 <br>";
}
////////////////////////
if($rate3==0){
  echo "
 
    <tr>
      <td>هل انت راضي عن خدمة التمريض؟</td>
      <td>bad</td>
 <br>";
}
elseif($rate3==3 )
{
  echo "
 
  <tr>
      <td>هل انت راضي عن خدمة التمريض؟</td>
      <td>good</td>
 <br>";
}
elseif($rate3==5){
  echo "
 
  <tr>
  <td>هل انت راضي عن خدمة التمريض؟</td>
  <td>very</td>
<br>";
}
else{
  echo "
  <tr>
   
    <td>هل انت راضي عن خدمة التمريض؟</td>
    <td>excelent</td>
<br>";
}
///////////////////////////////
if($rate4==0){
  echo "
  <tr>
   
    <td>هل انت راضي علي مستوي الدكاترة؟</td>
    <td>bad</td>
<br>";
}
elseif($rate4==3 )
{
  echo "
  <tr>
   
    <td>هل انت راضي علي مستوي الدكاترة؟</td>
    <td>good</td>
<br>";
}
elseif($rate4==5){
  echo "
  <tr>
   
    <td>هل انت راضي علي مستوي الدكاترة؟</td>
    <td>vey good</td>
<br>";
}
else{
  echo "
  <tr>
   
    <td>هل انت راضي علي مستوي الدكاترة؟</td>
    <td>excelent</td>
<br>";
}
//////////////////////////
if($rate5==0){
  echo "
  <tr>
   
    <td>هل انت راضي علي الهدوء بالمستشفي؟</td>
    <td>bad</td>
<br>";
}
elseif($rate5==3 )
{
  echo "
  <tr>
   
    <td>هل انت راضي علي الهدوء بالمستشفي؟</td>
    <td>good</td>
<br>";
}
elseif($rate5==5){
  echo "
  <tr>
   
    <td>هل انت راضي علي الهدوء بالمستشفي؟</td>
    <td>very good</td>
<br>";
}
else{
  echo "
  <tr>
   
    <td>هل انت راضي علي الهدوء بالمستشفي؟</td>
    <td>exellent</td>
<br>";
}
if($result<25){
  echo "<<tr>
   
  <td class='bg-dark text-white'>total review</td>
  <td class='bg-dark text-white'>bad</td>

<div class='bg-dark text-white'><h1 class='text-center'>sorry we will call you in your number {$_SESSION['numberlogin']}</h1></div> ";
}
else{
  echo "<tr>
   
  <td class='bg-dark text-white'>total review</td>
  <td class='bg-dark text-white'>good</td>
<br>
<div class='bg-dark text-white'><h1 class='text-center'>thanks for rating</h1></div>";
}
?>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>             