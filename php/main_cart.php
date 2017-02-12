<?php

  if (!isset($_SESSION)) {
    # code...
    session_start();
    include '../allow_me/php/connection.php';
  }
?>


<!-- Cart view section -->
     <section id="cart-view">
       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="cart-view-area">
               <div class="cart-view-table">
                 <form action="">
                   <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Remove</th>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $sql = "SELECT * FROM user_cart WHERE user_email = '".$_SESSION['user']."'";
                            $result = $conn->query($sql);

                            $total=0;
                            $sub_total=0;

                            if ($result->num_rows == 0) {
                              echo "<script>alert('cart is empty.'); window.location.href = 'index.php';</script>";
                            }

                            while ($row = $result->fetch_assoc()) {

                            $quantity = $row['total_quantity'];

                            $card_sql = "SELECT card_name,card_image,card_price FROM cards WHERE card_id = ".$row['card_id'];

                            $res = $conn->query($card_sql);

                            $card_data = $res->fetch_assoc();

                            $sub_total = ($quantity*$card_data['card_price']);

                            $total = $total + $sub_total;
                          ?>
                            <tr id="<?php echo ($row['card_id']);?>_tr">
                              <td><a class="remove remove_cart" data="<?php echo ($_SESSION['user']);?>,<?php echo ($row['card_id']);?>" href="#"><fa class="fa fa-close"></fa></a></td>
                              <td><a href="#"><img src="./allow_me/images/cards/tiles/<?= $card_data['card_image']?>" alt="img"></a></td>
                              <td><a class="aa-cart-title" href="#"><?= $card_data['card_name']?></a></td>
                              <td>RS <?= $card_data['card_price']?></td>
                              <td><input data="<?php echo ($_SESSION['user']);?>,<?php echo ($row['card_id']);?>" class="aa-cart-quantity card_quantity" type="number" value="<?= $quantity?>"></td>
                              <td>RS <?= $sub_total ?></td>
                            </tr>

                          <?php

                            }

                          ?>
                        </tbody>
                      </table>
                    </div>
                 </form>
                 <!-- Cart Total view -->
                 <div class="cart-view-total">
                   <h4>Cart Totals</h4>
                   <table class="aa-totals-table">
                     <tbody>
                       <tr>
                         <th>Subtotal</th>
                         <td>RS <?= $total ?></td>
                       </tr>
                       <tr>
                         <th>Total</th>
                         <td>RS <?= $total ?></td>
                       </tr>
                     </tbody>
                   </table>
                   <a href="#" class="aa-cart-view-btn">Proced to Checkout</a>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
     <!-- / Cart view section -->