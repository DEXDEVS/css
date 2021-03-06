<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model frontend\models\Authors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="authors-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
      <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> Authors</h4></div>
        <div class="panel-body">
             <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 10, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $authors[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'author_fname',
                    'author_mname',  
                    'author_lname',
                    'author_country',
                    'author_affiliation',
                    'author_email',
                    'author_corresponding',
                ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($authors as $i => $author): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Author <?php echo $i+1; ?></h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            
                        ?>
                        <div class="row">
                            <div class="col-sm-4">
                                <?= $form->field($author, "[{$i}]author_fname")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($author, "[{$i}]author_mname")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($author, "[{$i}]author_lname")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div><!-- .row -->
                        <div class="row">
                            <div class="col-sm-4">
                                <?= $form->field($author, "[{$i}]author_country")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($author, "[{$i}]author_affiliation")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($author, "[{$i}]author_email")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div><!-- .row -->
                        <div class="row">
                            <div class="col-md-4">
                                <?= $form->field($author, "[{$i}]author_corresponding")->checkbox(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
        </div>  
    </div>
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($authors->isNewRecord ? 'Create' : 'Update', ['class' => $authors->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php }?>

    <?php ActiveForm::end(); ?>
    
</div>
