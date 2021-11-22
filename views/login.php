<h3>Connexion</h3>
<?php 
use App\core\form\Form;
$form = new Form();
Form::begin('', "post") 
?>
    <?php echo $form->field($model, 'email')->emailField() ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
<?php  
Form::end(); 
?>
<!-- <form action="" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form> -->