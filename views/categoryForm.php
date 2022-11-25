<div>
    <h2><?=isset($category['CategoryID']) ? 'Edit' : 'Create'?> Category</h2>
    <a href="categories.php" style="float:right">View all</a>
</div>
<form action="" method="post" style="margin-top: 10px;">
    <input type="hidden" name="CategoryID" value="<?=$category['CategoryID'] ?? ''?>">

    <label for="CategoryName">Category Name: </label>
    <input type="text" id="CategoryName" name="CategoryName" value="<?=$category['CategoryName'] ?? ''?>" required>

    <label for="Description">Product Description: </label>
    <input type="text" id="Description" name="Description" value="<?=$category['Description'] ?? ''?>" required>
    
    <input type="submit" name="submit" value="Save">
</form>