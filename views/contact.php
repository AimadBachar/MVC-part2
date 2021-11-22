<h3>Contact us</h3>
<?php 
use App\core\form\Form;
$form = new Form();
Form::begin('', "post") 
?>
    <?php echo $form->field($model, 'subject') ?>
    <?php echo $form->field($model, 'email')->emailField() ?>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" name="message" id="message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
<?php  
Form::end(); 
?>
