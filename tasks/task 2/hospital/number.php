<?php
// start a session
session_start();
$_SESSION['numberlogin']=$_POST['phone_number'];

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
  <body>
  <h1 class="mt-5 text-center text-danger">Hello in hospital rating </h1>
      <div class="container bg-dark mt-5">          
           <div class="row">
                <img src="hospital-1.jpg" class="col-6 mt-5"> 
                <form class=" col-5 mt-5 bg-dark text-primary" method="post" action="Review.php">
                    <h3>Enter your phone number : </h3>
                    <input name="phone_number" type="text" class="col-12 mt-3">
                    <div class="row justify-content-center"> 
                    <button class="btn bg-primary mt-3 col-4"> submit</button>
                    </div>
                </form>
            </div>

          </div>

     
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>