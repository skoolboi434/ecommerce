<?php ob_start()?>
<?php include 'includes/header.php'; ?>

<?php include 'includes/carousel.php'; ?>

<?php include 'includes/top-sales.php'; ?>

<!-- Special Price -->

<?php 

$brand = array_map(function($pro){return $pro['brand'];}, $product_shuffle);
$unique = array_unique($brand);
sort($unique);
shuffle($product_shuffle);

//request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['special_price_submit'])){
        // call addToCart method
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
    
}
?>

<section id="special-price" class="mb-3">
    <div class="container">
        <h4 class="font-size-20">Special Price</h4>
        <div id="filters" class="button-group text-right font-size-20">
            <button class="btn is-checked" data-filter="*">All Brands</button>
            <?php
                array_map(function($brand){
                    printf('<button class="btn" data-filter=".%s">%s</button>',$brand, $brand);
                }, $unique);
            ?>
        </div>
        <div class="grid">
            <?php array_map(function($item){ ?>
            <div class="grid-item border <?php echo $item['brand'] ?? 'Brand'; ?>">
                <div class="item py-2 mb-2" style="width: 200px;">
                    <div class="product">
                        <a href="<?php printf('%s?id=%s','product.php',$item['item_id'])?>">
                            <img src="<?php echo $item['image'] ?? 'products/13.png' ?>" alt="product13" class="img-fluid">
                        </a>
                        <div class="text-center">
                            <h6><?php echo $item['name'] ?? 'unknown'; ?></h6>
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
                                <button type="submit" name="special_price_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php }, $product_shuffle) ?>
        </div>
    </div>
</section>

<!-- End Special Price -->

<?php include 'includes/footer.php'; ?>