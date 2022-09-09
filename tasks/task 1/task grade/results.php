<?php
if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
     
    $grade1=$_POST["grade1"];
    $grade2= $_POST["grade2"];
    $grade3= $_POST["grade3"];
    $grade4= $_POST["grade4"]; 
    $grade5= $_POST["grade5"];
    $sum=$grade1+$grade2+$grade3+$grade4+$grade5;
    $average=($sum/500)* 100;
    $message = "your grade is:{$average} and<br> your score is: grade ";
    if($average>0  && $average<40){
            $message.= " F";
    }
    elseif($average>=40 && $average < 60){
        $message.= " E";
    }
    elseif($average>=60 && $average <70){
        $message.= " D";
    }
    elseif($average >=70 && $average<80){
        $message.= " C";
    }
    elseif($average >=80 && $average<90){
        $message.= " B";
    }
    elseif($average >=90 && $average<=100){
        $message.= " A";
    }
  else{
      echo("not data");
  }
  

}
?>
