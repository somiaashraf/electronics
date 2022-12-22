<?php 
require_once __DIR__ . '/db/cards.php';
$id=$_GET['id'];
$card=database_get_cards($id);


?>
<head>
<style>
*{
  text-align: center;
  
  }
  img{
    margin:auto;
  }
  .card{
    
    margin-top:250px
  }
  body{
    display: flex;
    height: 400px;
    justify-content: center;
    align-items: center;

  }
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>
<div class="col-md-3 py-3 py-md-0">
          <div class="card">
            <img src="<?php echo $card['img']?> "style="max-width:50%;max-height:500px;"  alt="">
            <div class="card-body">
             
              <div class="text-center"style="font-size:30px"><?php echo $card['product_name']?></div>
              
              <div class="text-cener"style="color:blue;"><?php print_r( $card['details'])?></div>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <div class="price"style="font-size:30px;"><?php echo $card['price']?></div>
              <div class="btn"><a href="form.php "><button>Shop Now</button></a></div>

            </div>
          </div>
        </div>

</body>