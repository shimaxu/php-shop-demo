<div>
    <h2>Sign up</h2>
</div>
<form action="" method="post" style="margin-top: 10px;">

    <label for="email">User Email: </label>
    <input type="text" id="email" name="email" required>
    <?php if(isset($error)): ?>
        <span style="color: red;margin-left:5px"><?=$error?></span>
    <?php endif ?>

    <label for="password">User Password: </label>
    <input type="password" id="password" name="password" required>
    
    <input type="submit" name="submit" value="Save">

    <div class="success">
        <?php if(isset($success)):?>
            <span style="color: green;"><?=$success?></span>
            <a href="login.php">Login</a>
        <?php endif ?>
    </div>
    
</form>