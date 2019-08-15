<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1> controller 'Post' / Action 'test' / View 'test'</h1>

<?php //debug($model); ?>

<?php $form = ActiveForm::begin(['options'=>['id'=>'testForm']]); ?>
    <?php echo $form->field($model, 'name') ?>
    <?php echo $form->field($model,'email')->input('email ') ?>
    <?php echo $form->field($model,'text')->textarea(['rows'=>5]) ?>
    <?php echo Html::submitButton('Отправить',['class'=>'btn btn-success']) ?>
<?php ActiveForm::end(); ?>
