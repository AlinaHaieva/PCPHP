<?php $form = $this->beginWidget('CActiveForm', [
    'id' => 'add-feedback-criterias',
    'method' => 'post',
    'enableAjaxValidation' => true,
    'htmlOptions' => ['enctype' => 'multipart/form-data'],
]); ?>

    <br>

    <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12">
            <h4>Interview score:</h4>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->textField($modelInterviewer, 'score', ['class' => 'interview-score']) ?>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-12"></div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-12">
            <h4>Summary feedback:</h4>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-12"></div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12">
            <?php echo $form->textArea($modelInterviewer, "summary", array("rows" => 10, 'class' => 'summary-feedback')); ?>
        </div>
    </div>

    <br>

    <div class="button-area feedback-buttons">
        <?php echo CHtml::submitButton('V', ['class' => 'submit']); ?>

        <button type="button" class="close-modal" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span>
        </button>
    </div>

<?php $this->endWidget(); ?>