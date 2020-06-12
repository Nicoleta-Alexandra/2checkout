<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Checkout page</title>
    <script type="text/javascript" src="product.json"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="cart.css"/>
    <script src="store.js" async></script>
  </head>
  <body>
    <h1>Checkout page</h1>
    
    <?php
     $url = 'product.json'; // path to your JSON file
     $data = file_get_contents($url); // put the contents of the file into a variable
     $products = json_decode($data); // decode the JSON feed
    
     $product1 = $products[0];
     $product2 = $products[1];
     $product3 = $products[2];
     $product4 = $products[3];

     $price = array($product1->price, $product2->price , $product3->price, $product4->price);
     rsort($price);

     

    ini_set('max_execution_time', 0);
    for ($i = 0; $i<4; ++$i ) {

    if ($products[$i]->price === $price[0]):
    $product1 = $products[$i];
    
    elseif ($products[$i]->price === $price[1]):
    $product2 = $products[$i];

    endif;
    
    if ($products[$i]->price === $price[2]):
    $product3 = $products[$i];
    
    elseif ($products[$i]->price === $price[3]):
    $product4 = $products[$i];
    
    endif;

    
} 

 

?>
  <!-- <div class="produse">-->
    <table >
      <tr>
      <td >
   <section class="container content-section">
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title"><?php echo $product1->name; ?></span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">Price:$ <?php echo $english_format_number = number_format($product1->price, 2, '.', '')  ?></span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <p>
                </p>
                <div class="shop-item">
                    <span class="shop-item-title"><?php echo $product2->name; ?></span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">Price:$ <?php echo $english_format_number = number_format($product2->price, 2, '.', '')  ?></span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <p>
                </p>
                <div class="shop-item">
                    <span class="shop-item-title"><?php echo $product3->name; ?></span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">Price:$ <?php echo $english_format_number = number_format($product3->price, 2, '.', '')  ?></span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <p>
                </p>
                <div class="shop-item">
                    <span class="shop-item-title"><?php echo $product4->name; ?></span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">Price:$ <?php echo $english_format_number = number_format($product4->price, 2, '.', '')  ?></span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
      </td>
    
      <!--</div>-->
<!--<div class='cart'>-->
  
    <td >
   <section class="container content-section">
            <h2 class="section-header">CART</h2>
            
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">Product</span>
                <span class="cart-quantity cart-header cart-column">Quantity</span>
                <span class="cart-price cart-header cart-column">Value</span>
            </div>
         
            <div class="cart-items">
              
              <!--<div class="cart-row">
                <div class="cart-item cart-column">
                  <span class="cart-item-title">NAME </span>
                </div>
                 <span class="cart-price cart-column">PRICE</span>
                 <div class="cart-quantity cart-column">
                  <input class="cart-quantity-input" type="number" value="1">
                  <button class="btn btn-danger" type="button"> REMOVE </button>
                 </div>
               </div>
              -->

            </div>
          
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">CONTINUE</button>
        </section>
</td>
</tr>
        </table>
<!--</div>-->


  </body>
  </html>
