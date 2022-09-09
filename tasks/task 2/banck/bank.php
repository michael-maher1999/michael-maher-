<?php
if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
    $name=$_POST['name'];
    $loan=$_POST['loan'];
    $year_loan=$_POST['year_loan'];
    $result=0;
    $month=12*$year_loan;
   
    
    
    
    if($year_loan<=3){
        $result=$loan + $loan*$year_loan*10/100;
        $increase=$result-$loan;

       

    }else{
        $result=$loan + $loan *$year_loan*15/100;
        $increase=$result-$loan;
     
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
  
      <div class="container bg-light">
          <form method="POST">
              <div class="row justify-content-center mt-5 "> 
                  <h1 class="col-12 text-center">Enter your name</h1>
              <input type="text" class="col-7 mt-5" name="name">
              <h1 class="text-center mt-5 col-12">Enter your Bank loan</h1>
                    <input type="number" class="col-7 mt-5" name="loan">
                    
                    <h1 class="col-12 text-center mt-4">enter years you want paid your loan </h1>

                    <input type="number" class="col-7 mt-5" name="year_loan">
                    <input type="submit" value="submit" class="mx-5 col-4 mt-3">
                     <h3 class="col-12 mt-2"><?php         echo "<table class='table mt-5'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>User_name</th>

      <th scope='col'>loan</th>
      <th scope='col'> Month</th>
      <th scope='col'>increase</th>
      <th scope='col'>loan after increase</th>

    </tr>
  </thead>
  <tr>
  <th scope='row'></th>
  <td class='text-center'>{$name}</td>

  <td class='text-center'>{$loan}</td>
  <td class='text-center'>{$month}</td>
  <td class='text-center'>{$increase}</td>
  <td class='text-center'>{$result}</td>


</tr>

  </table>"
?></h3>

              </div>


          </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>