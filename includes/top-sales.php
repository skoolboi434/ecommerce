<?php 
    
    shuffle($product_shuffle);

    //request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['top_sale_submit'])){
            // call addToCart method
            $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
        }
        
    }
?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-size-20">Top Sale</h4>
        <hr>

        <!-- Owl Carousel -->
            <div class="owl-carousel owl-theme">
                <?php foreach($product_shuffle as $item) { ?>
                <div class="item py-2">
                    <div class="product">
                        <a href="<?php printf('%s?id=%s','product.php',$item['item_id'])?>">
                            <img src="<?php echo $item['image']?? "products/1.png"?>" alt="product1" class="img-fluid">
                        </a>
                        <div class="text-center py-3">
                            <h6><?php echo $item['name'] ?? 'Unknown'; ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $item['price'] ?? '0'; ?></span>

                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } // closing foreach function ?>
            </div>
        <!-- End Owl Carousel -->

    </div>
</section>