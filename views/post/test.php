<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1> controller 'Post' / Action 'test' / View 'test'</h1>

<?php //debug($model); ?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success">
        <button type="button " class="close" data-dismiss="alert">&times;</button>
        <?php echo Yii::$app->session->getFlash('success');?>
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger">
        <button type="button " class="close" data-dismiss="alert">&times;</button>
        <?php echo Yii::$app->session->getFlash('error');?>
    </div>
<?php endif; ?>

<?php $form = ActiveForm::begin(['options'=>['id'=>'testForm']]); ?>
    <?php echo $form->field($model, 'name') ?>
    <?php echo $form->field($model,'email')->input('email ') ?>
    <?php echo $form->field($model,'text')->textarea(['rows'=>5]) ?>
    <?php echo Html::submitButton('Отправить',['class'=>'btn btn-success']) ?>
<?php ActiveForm::end(); ?>
