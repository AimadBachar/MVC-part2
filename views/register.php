<h3>Inscription</h3>
<?php 
use App\core\form\Form;
$form = new Form();
Form::begin('', "post") 
?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firsname') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastname') ?>
        </div>
    </div>
    <?php echo $form->field($model, 'email')->emailField() ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <?php echo $form->field($model, 'confirmPassword')->passwordField() ?>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
<?php  
Form::end(); 
?>
<!-- <form action="" method="post">
    <div class="mb-3">
        <label for="firstname" class="form-label">Prénom</label>
        <input type="text" class="form-control" name="firstname" id="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Nom</label>
        <input type="text" class="form-control" name="lastname" id="lastname">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirmer mot de passe</label>
        <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form> -->