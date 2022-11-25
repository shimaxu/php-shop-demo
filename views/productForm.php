<div>
    <h2><?=isset($product['ProductID']) ? 'Edit' : 'Create'?> Product</h2>
    <a href="products.php" style="float:right">View all</a>
</div>
<form action="" method="post" style="margin-top: 10px;">
    <input type="hidden" name="ProductID" value="<?=$product['ProductID'] ?? ''?>">

    <label for="ProductName">Product Name: </label>
    <input type="text" id="ProductName" name="ProductName" value="<?=$product['ProductName'] ?? ''?>" required>

    <label for="Unit">Product Unit: </label>
    <input type="text" id="Unit" name="Unit" value="<?=$product['Unit'] ?? ''?>" required>

    <label for="Price">Product Price: </label>
    <input type="number" id="Price" name="Price" value="<?=$product['Price'] ?? ''?>" required>
    
    <input type="submit" name="submit" value="Save">
</form>