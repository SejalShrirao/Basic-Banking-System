<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <style type="text/css">
      .col-sm-12.bannertext {
    padding: 15px;
    position: absolute;
    background: #00000073;
    color: white;
    font-size: 30px;
    top: 0px;
}
.act button{
    background-color: #b42525 !important;
    color: white !important;
    text-transform: uppercase !important;
    padding: 8px 20px !important;
    font-size: 15px !important;
    border-color: transparent !important;
}
.img-fluid {
    margin: 20px 0 !important;
}
.container{
    width: 100% !important;
    display: block !important;
}
.carousel-caption {
    background: #ffffff57;
}div#btm img {
    padding-bottom: 17px;
}
    </style>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container">
      <!-- Introduction section -->
       <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bank.png" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
    <h3>WELCOME TO CITIZEN'S BANK</h3>
    <p>Join With Our Bank</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="img/bank.png" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
    <h3>WE TAKE CARE OF YOUR MONEY </h3>
    <p>Famous For Safe Transaction</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="img/bank.png" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
    <h3>50+ YEAR'S OF YOUR TRUST</h3>
    <p>More Than 50000+ User</p>
  </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>
                  <div id="btm" class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Sejal Shrirao</b> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>