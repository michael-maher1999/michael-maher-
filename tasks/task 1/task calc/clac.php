<?php 
if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
    $first_num=$_POST['first_value'];
    $second_num=$_POST['second_value'];
    $operator=$_POST['operator'];
    if($operator== "+"){
        $result=$first_num +$second_num;
    }
    elseif($operator== "-"){
        $result=$first_num - $second_num;
      
    }
    elseif($operator== "*"){
        $result=$first_num * $second_num;
        
    }
    elseif($operator== "/"){
        $result=$first_num / $second_num;
        
    }
    elseif($operator== "%"){
        $result=$first_num % $second_num;
        
    }
    else{
        echo("end");
    }


}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <form method="post" class="container w-50 mt-5 border rounded bg-light">
  <div class="mb-3">
    <label class="form-label mt-5 ">Enter the first Number</label>
    <input type="number" class="form-control w-25" name="first_value" >
  </div>
  <div class="mb-3 mt-4">
    <label class="form-label">Enter The Second Number</label>
    <input type="number" class="form-control w-25" name="second_value" >
  </div>
  <div class="mb-3 mt-4">
  <select name="operator" class="w-25 bg-primary text-white">
<option >+</option>
<option>-</option>
<option>*</option>
<option>/</option>
<option>%</option>

</select>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit </button>
  <div class="text-center bg-primary mt-5  text-white"> <?php echo $result ?? " " ?></div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>