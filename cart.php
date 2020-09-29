<?php include 'includes/header.php'; ?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
        }

        // save for later
        if (isset($_POST['wishlist-submit'])){
            $Cart->saveForLater($_POST['item_id']);
        }
    }
?>

<!-- Shopping Cart Section-->

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-size-20">Shopping Cart</h5>

        <!-- Shopping Cart Items-->

        <div class="row">
            <div class="col-sm-9">
                
                <?php 
                
                    foreach($product->getData('cart') as $item) :
                        $cart = $product->getProduct($item['item_id']);
                        $subTotal[] = array_map(function($item){
                ?>
                <!-- Cart Item-->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['image'] ?? 'product/1.png'; ?>" alt="product1" class="img-fluid" style="height: 120px;">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-size-20"><?php echo $item['name'] ?? 'Name'; ?></h5>
                        <small>by <?php echo $item['brand'] ?? 'unknown'; ?></small>
                        <!-- Product rating-->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-size-14">&nbsp;&nbsp;20,534 ratings</a>
                        </div>
                        <!-- End Product Rating -->

                        <!-- Product Qty -->

                        <div class="qty d-flex pt-2">
                            <div class="d-flex w-25">
                            <button class="qty-up border bg-light" data-id="pro1"><i class="fa fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light" data-id="pro1"><i class="fa fa-angle-down"></i></button>
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn text-danger px-3 border-right">Delete</button>
                            </form>
                            <button type="submit" class="btn text-danger px-3 ">Save for later</button>
                        </div>

                        <!-- End Product Qty -->
                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger danger">
                            $<span class="product_price"><?php echo $item['price'] ?? '0'; ?></span>
                        </div>
                    </div>
                </div>
                <!-- End Cart Item-->
                <?php 
                return $item['price'];}, $cart); 
                endforeach; 
                
                ?>

            </div>

            <div class="col-sm-3">
                <!-- Subtotal Section -->

                <div class="sub-total text-center mt-2 border">
                    <h6 class="font-size-12 text-success py-3"><i class="fa fa-check"></i>&nbsp;Your order is eligible for FREE Delivery</h6>
                    <div class="border-top py-4">
                    <h5 class="font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>

                <!-- End Subtotal Section -->
            </div>
        </div>

        <!-- End Shopping Cart Items-->
    </div>
</section>

<!-- End Shopping Cart Section-->

<?php include 'includes/top-sales.php'; ?>
<?php include 'includes/footer.php'; ?>