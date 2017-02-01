<?php

  if (!isset($_SESSION)) {
    # code...
    session_start();
    include '../allow_me/php/connection.php';
  }

  if (isset($_SESSION['logged_in'])) {
    # code...
    $sql = "SELECT * FROM user_cart WHERE user_email = '".$_SESSION['user']."'";

    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
?>
      <a class="aa-cart-link" href="#">
        <span class="fa fa-shopping-basket"></span>
        <span class="aa-cart-title">SHOPPING CART</span>
        <span class="aa-cart-notify">0</span>
      </a>
<?php
    }
    else
    {

      $total=0;

?>
      <a class="aa-cart-link" href="#">
        <span class="fa fa-shopping-basket"></span>
        <span class="aa-cart-title">SHOPPING CART</span>
        <span class="aa-cart-notify"><?= $result->num_rows; ?></span>
      </a>
      <div class="aa-cartbox-summary">
        <ul>
<?php

  while ($row = $result->fetch_assoc()) {

    $card_sql = "SELECT card_name,card_image,card_price FROM cards WHERE card_id = ".$row['card_id'];

    $res = $conn->query($card_sql);

    $card_data = $res->fetch_assoc();

    $total = $total + ($row['total_quantity']*$card_data['card_price']);
      
  

?>
    <li>
      <a class="aa-cartbox-img" href="#"><img src="./allow_me/images/cards/thumbnails/<?= $card_data['card_image']?>" alt="img"></a>
      <div class="aa-cartbox-info">
        <h4><a href="#"><?= $card_data['card_name']?></a></h4>
        <p><?= $row['total_quantity']; ?> x RS <?= $card_data['card_price']?></p>
      </div>
      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
    </li>
<?php

  }

?>
    <li>
      <span class="aa-cartbox-total-title">
        Total
      </span>
      <span id="cart_total_price" class="aa-cartbox-total-price">
        RS <?= $total?>
      </span>
    </li>
  </ul>
  <a class="aa-cartbox-checkout aa-primary-btn" href="#">Checkout</a>
</div>

<?php
    }
  }
  else
  {
?>
    <a class="aa-cart-link" href="#">
      <span class="fa fa-shopping-basket"></span>
      <span class="aa-cart-title">SHOPPING CART</span>
      <span class="aa-cart-notify">0</span>
    </a>
<?php
  }
?>
