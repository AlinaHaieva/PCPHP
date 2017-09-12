<?php

class ThingsDone extends CActiveRecord
{
    public $id;
    public $name;

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'getting_things_done';
    }
}
