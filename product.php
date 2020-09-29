<?php include 'includes/header.php'; ?>

<?php 
    $item_id = $_GET['id'] ?? 1;
    foreach($product->getData() as $item) :
        if($item['item_id'] == $item_id) :
?>

<!-- Product Details -->

<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['image'] ?? 'products/1.png'?>" alt="product1" class="img-fluid">
                <div class="form-row pt-4 font-size-16">
                    <div class="col">
                        <button class="btn btn-danger form-control">Buy Now</button>
                    </div>
                    <div class="col">
                    <?php
                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-size-20"><?php echo $item['name'] ?? 'Name'?></h5>
                <small>by: <?php echo $item['brand'] ?? 'Brand'?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12 mr-1">
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="font-size-14">&nbsp;&nbsp;20,534 ratings | 1000+ answered questions</a>
                </div>
                <hr class="m-0">

                <!-- Product Price -->

                    <table class="my-3">
                        <tr class="font-size-14">
                            <td>Price</td>
                            <td class="font-size-20 text-danger">$<span><?php echo $item['price'] ?? '0'?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Taxes included</small></td>
                        </tr>
                    </table>

                <!-- End Product Price -->

                <!-- Policy -->

                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fa fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="" class="font-size-12">10 Days <br>Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fa fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="" class="font-size-12">Quick <br>Delivery</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fa fa-shopping-cart border p-3 rounded-pill"></span>
                            </div>
                            <a href="" class="font-size-12">Secure <br>Checkout</a>
                        </div>
                    </div>
                </div>

                <!-- End Policy -->

                <hr>

                <!-- Order Details -->

                <div id="order-details" class="d-flex flex-column text-dark">
                    <small>Delivery by: September 29</small>
                    <small>Sold by <a href="#">Daily Electronics</a></small>
                    <small><i class="fa fa-map-marker color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                </div>

                <!-- End Order Details -->

                <div class="row">
                    <div class="col-6">
                        <!-- Color -->

                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6>Color:</h6>
                                <div class="p-2 color-fourth-bg rounded-circle">
                                    <button class="btn font-size-14"></button>
                                </div>
                                <div class="p-2 color-primary-bg rounded-circle">
                                    <button class="btn font-size-14"></button>
                                </div>
                                <div class="p-2 color-second-bg rounded-circle">
                                    <button class="btn font-size-14"></button>
                                </div>
                            </div>
                        </div>

                        <!-- End Color -->
                    </div>
                    <div class="col-6">
                        <!-- Qty Section -->
                        <div class="qty d-flex">
                            <h6>Qty:</h6>
                            <div class="px-4 d-flex">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fa fa-angle-up"></i></button>
                                <input type="text" class="qty_input border px-2 w-50 bg-light" data-id="pro1" disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light" data-id="pro1"><i class="fa fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- End Qty Section -->
                    </div>
                </div>
                <!-- Size -->

                    <div class="size my-3">
                        <h6>Size:</h6>
                        <div class="d-flex justify-content-between w-75">
                            <div class="border p-2">
                                <button class="btn p-0 font-size-14">4GB RAM</button>
                            </div>
                            <div class="border p-2">
                                <button class="btn p-0 font-size-14">8GB RAM</button>
                            </div>
                            <div class="border p-2">
                                <button class="btn p-0 font-size-14">12GB RAM</button>
                            </div>
                        </div>
                    </div>

                <!-- End Size -->
            </div>

            <div class="col-12">
                <h6>Product Description</h6>
                <hr>
                <p class="font-size-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam enim consectetur molestias modi id. Aliquid ex quam, fuga nihil distinctio iure culpa eveniet consequuntur neque quasi necessitatibus ea quod incidunt.</p>
                <p class="font-size-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam enim consectetur molestias modi id. Aliquid ex quam, fuga nihil distinctio iure culpa eveniet consequuntur neque quasi necessitatibus ea quod incidunt.</p>
            </div>
        </div>
    </div>
</section>

<!-- End Product Details -->

<?php endif; endforeach; ?>

<?php include 'includes/top-sales.php'; ?>

<?php include 'includes/footer.php'; ?>