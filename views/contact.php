<?php
/* @var $this \basanta\phpmvc\View*/
/* @var $model\app\models\ContactForm*/

use basanta\phpmvc\form\Form;
use basanta\phpmvc\form\TextareaField;

$this->title = 'Contact';
?>

<h1 class="text-center">Contact US</h1>
<?php $form = Form::begin('', 'post') ?>

<?php echo $form->field($model, 'subject')  ?>
<?php echo $form->field($model, 'email')  ?>
<?php echo new TextareaField($model, 'message')  ?>
<button type="submit" class="btn btn-success my-2">Submit</button>

<?php echo form::end() ?>
