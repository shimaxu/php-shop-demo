<div>
    <h2>Products</h2>
    <?php if($loggedIn): ?>
    <a href="productForm.php" style="float:right">Create Product</a>
    <?php endif ?>
    <p>There are total <?=$totalProducts?> Products.</p>
</div>


<?php foreach ($products as $product): ?>
<blockquote>
<p>
    <?=htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8')?>
    <?php if($loggedIn): ?>
        <a href="productForm.php?id=<?=$product['id']?>">Edit</a>
        <form action="" method="post">
        <input type="hidden" name="ProductID" value="<?=$product['id']?>">
        <input type="submit" value="Delete">
        </form>
    <?php endif ?>

</p>
</blockquote>
<?php endforeach; ?>