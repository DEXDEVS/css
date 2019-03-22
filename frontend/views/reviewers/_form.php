<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reviewers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reviewers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reviewer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reviewer_cnic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reviewer_designation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reviewer_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reviewer_domain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reviewer_contact_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reviewer_website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
