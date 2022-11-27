<div>
    <h2>Categories</h2>
    <?php if($loggedIn): ?>
    <a href="categoryForm.php" style="float:right">Create Category</a>
    <?php endif ?>
    <p>There are total <?=$totalCategories?> Categories.</p>
</div>


<?php foreach ($categories as $category): ?>
<blockquote>
<p>
    <?=htmlspecialchars($category['name'], ENT_QUOTES, 'UTF-8')?>
    <?php if($loggedIn): ?>
        <a href="categoryForm.php?id=<?=$category['id']?>">Edit</a>
        <form action="" method="post">
        <input type="hidden" name="CategoryID" value="<?=$category['id']?>">
        <input type="submit" value="Delete">
        </form>
     <?php endif ?>
</p>
</blockquote>
<?php endforeach; ?>