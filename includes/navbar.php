
<nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
    <a class="navbar-brand" href="index.php">Mobile Next</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto ">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Categories <i class="fa fa-chevron-down"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Products <i class="fa fa-chevron-down"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        </ul>
        <form action="" class="font-size-14">
            <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                <span class="font-size-16 px-2 text-white"><i class="fa fa-shopping-cart"></i></span>
                <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count( $product->getData('cart')); ?></span>
            </a>
        </form>
    </div>
</nav>
