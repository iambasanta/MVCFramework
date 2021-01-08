<?php
/* @var app\models\User */
?>
<h1 class="text-center">Login</h1>
<?php $form = \app\core\form\Form::begin('', "post") ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>

<button type="submit" class="btn btn-success my-2">Login</button>
<?php echo \app\core\form\Form::end() ?>
