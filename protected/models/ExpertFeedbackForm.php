<?php

class ExpertFeedbackForm extends CFormModel
{
    public $learning_ability_id;
    public $overall_technical_competence_id;
    public $passionate_initiative_id;
    public $team_work_id;
    public $getting_things_done_id;
    public $active_communicator_id;
    public $score;
    public $summary;

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'expert_feedbacks';
    }

    public function attributeLabels()
    {
        return [
            'learning_ability_id' => 'learning_ability_id',
            'overall_technical_competence_id' => 'overall_technical_competence_id',
            'passionate_initiative_id' => 'passionate_initiative_id',
            'team_work_id' => 'team_work_id',
            'getting_things_done_id' => 'getting_things_done_id',
            'active_communicator_id' => 'active_communicator_id',
            'score' => 'score',
            'summary' => 'summary',
        ];
    }

    public function relations()
    {
        return [
            'learningAbility' => [self::BELONGS_TO, 'LearningAbility', 'learning_ability_id'],
            'technicalCompetence' => [self::BELONGS_TO, 'TechnicalCompetence', 'overall_technical_competence_id'],
            'passionateInitiative' => [self::BELONGS_TO, 'PassionateInitiative', 'passionate_initiative_id'],
            'teamWork' => [self::BELONGS_TO, 'TeamWork', 'team_work_id'],
            'thingsDone' => [self::BELONGS_TO, 'ThingsDone', 'getting_things_done_id'],
            'activeCommunicator' => [self::BELONGS_TO, 'ActiveCommunicator', 'active_communicator_id'],
        ];
    }
}
