<?php
/* @var $this \app\core\View*/
/* @var $model\app\models\ContactForm*/

use app\core\form\Form;
use app\core\form\TextareaField;

$this->title = 'Contact';
?>

<h1 class="text-center">Contact US</h1>
<?php $form = Form::begin('', 'post') ?>

<?php echo $form->field($model, 'subject')  ?>
<?php echo $form->field($model, 'email')  ?>
<?php echo new TextareaField($model, 'message')  ?>
<button type="submit" class="btn btn-primary my-2">Submit</button>

<?php echo form::end() ?>
