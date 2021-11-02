<?php
session_start();
require 'inc/head.php';
require 'inc/data/products.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php if (isset($_SESSION['cookies'])) {
            $cookies = array_count_values($_SESSION['cookies']); ?>
            <ul class="text-center">
                <?php foreach ($cookies as $id => $number) { ?>
                    <li> <?= $catalog[$id]['name'] . " x" .  $number ?> </li>
                <?php } ?>
            </ul>
        <?php } else { ?>
            <div class="text-center"> Nothing in your card yet ! </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>