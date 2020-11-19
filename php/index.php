<!-- products.php -->
<?php require_once "products.php";?>
<!-- functions.php -->
<?php require_once "functions.php";?>
<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/style.css" >
  <title>php_training</title>
</head>
<body>
  <div class="container">
    <form id="cart" method="post" action="carts.php">
      <div class="app-container">
        <h1 class="title">DailyTrial Shopping</h1>
        <div class="cards-container">
          <?php foreach($products as $product): ?>
            <div class="card">
                <img class="card-image" src="<?php echo $product["image"]?>" alt="">
                <p class="card-title"><?php echo $product["name"] ?></p>
                <div class="flex justify-between">
                  <p class="card-price"><?php echo calPriceIncludedTax($product["price"]) ?></p>
                  <input name="<?php echo $product["id"]?>" min="0" class="item-number" type="number" value="0">
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        <div class="btn-footer bg-white">
          <input form="cart" class="cart-btn" type="submit" name="submit" value="カートに追加" />
        </div>
      </div>
    </form>
  </div>
</body>
</html>