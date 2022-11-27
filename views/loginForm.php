<div>
    <h2>Sign in</h2>
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

    <div class="message">
        <?php if(isset($credentialError)):?>
            <span style="color: red;"><?=$credentialError?></span>
        <?php endif ?>
    </div>
    
</form>