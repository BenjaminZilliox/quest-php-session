<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        foreach ($_SESSION['cart'] as $id => $quantity) {
            echo $catalog[$id]['name'] . ' ' . $quantity . ' ', '<br>';
        } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
