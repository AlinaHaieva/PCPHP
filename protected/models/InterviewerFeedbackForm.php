<?php

class InterviewerFeedbackForm extends CFormModel
{
    public $score;
    public $summary;

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'interviewer_feedbacks';
    }

    public function attributeLabels()
    {
        return [
            'score' => 'interviewer_score',
            'summary' => 'interviewer_summary',
        ];
    }
}
