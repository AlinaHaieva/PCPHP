<?php $form = $this->beginWidget('CActiveForm', [
    'id' => 'add-feedback-criterias',
    'method' => 'post',
    'enableAjaxValidation' => true,
    'htmlOptions' => ['enctype' => 'multipart/form-data'],
]); ?>

    <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-12">
            <h4>Feedback by teacher:</h4>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-12">
            <h4>Feedback by expert: </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->label($modelTeacher, 'Learning ability:'); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->dropDownList($modelTeacher, 'learning_ability_id', [$learningAbilities], ['class' => 'learning-ability']); ?>
        </div>

        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->label($modelExpert, 'Learning ability:'); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->dropDownList($modelExpert, 'learning_ability_id', [$learningAbilities], ['class' => 'learning-ability']); ?>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->label($modelTeacher, 'Overall technical competence:'); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->dropDownList($modelTeacher, 'overall_technical_competence_id', [$techCompetence], ['class' => 'technical-competence']); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->label($modelExpert, 'Overall technical competence:'); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->dropDownList($modelExpert, 'overall_technical_competence_id', [$techCompetence], ['class' => 'technical-competence']); ?>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->label($modelTeacher, 'Passionate initiative:'); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->dropDownList($modelTeacher, 'passionate_initiative_id', [$passionateInitiative], ['class' => 'passionate-initiative']); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->label($modelExpert, 'Passionate initiative:'); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->dropDownList($modelExpert, 'passionate_initiative_id', [$passionateInitiative], ['class' => 'passionate-initiative']); ?>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->label($modelTeacher, 'Team work:'); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->dropDownList($modelTeacher, 'team_work_id', [$teamWork], ['class' => 'team-work']); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->label($modelExpert, 'Team work:'); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->dropDownList($modelExpert, 'team_work_id', [$teamWork], ['class' => 'team-work']); ?>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->label($modelTeacher, 'Getting things done:'); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->dropDownList($modelTeacher, 'getting_things_done_id', [$thingsDone], ['class' => 'getting-done']); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->label($modelExpert, 'Getting things done:'); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->dropDownList($modelExpert, 'getting_things_done_id', [$thingsDone], ['class' => 'getting-done']); ?>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->label($modelTeacher, 'Active Communicator:'); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->dropDownList($modelTeacher, 'active_communicator_id', [$activeCommunicator], ['class' => 'communicator']); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->label($modelExpert, 'Active Communicator:'); ?>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
            <?php echo $form->dropDownList($modelExpert, 'active_communicator_id', [$activeCommunicator], ['class' => 'communicator']); ?>
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