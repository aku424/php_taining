<!-- php -->
<?php 
  $product =[
    "name" => "アボカド",
    "price" => 230,
    "image" => "./img/image_1.jpg"
  ];
?>
<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./css/style.css" >
  <title>php_training</title>
</head>
<body>
  <div class="container">
    <div class="app-container">
      <h1 class="title">DailyTrial Shopping</h1>
      <div class="cards-container">
        <div class="card">
          <img class="card-image" src="<?php echo $product["image"]?>" alt="">
          <p class="card-title"><?php echo $product["name"]."円" ?></p>
          <div class="flex justify-between">
            <p class="card-price"><?php echo $product["price"] ?></p>
            <input min="0" class="item-number" type="number" value="0">
          </div>
        </div>
      </div>
      <div class="btn-footer bg-white">
        <input class="cart-btn" type="submit" name="submit" value="カートに追加" />
      </div>
    </div>
  </div>
</body>
</html>