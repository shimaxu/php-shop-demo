<?php
try {

    include __DIR__ . '/classes/Category.php';

    $category = new Category();

    if (isset($_POST['CategoryName'])) {
        $category->name = $_POST['CategoryName'];
        $category->description = $_POST['Description'];

        if (!empty($_POST['CategoryID'])) {
            $category->updateCategory($_POST['CategoryID']);
        } else {
            $category->saveCategory();
        }

        header('location: categories.php');
    } else {
        
        if (isset($_GET['id'])) {
            $category = $category->findCategory('CategoryID', $_GET['id']) ?? null;
        }
        else {
            $category = null;
        }

        $title = 'Category Form';
        ob_start();
        include __DIR__ . '/views/categoryForm.php';
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}
include __DIR__ . '/views/layout.php';