<?php

class StudentListController extends BaseController
{
    public function actionEnglishTable($group_id)
    {
        /** @var StudentComponent $component */
        $rawData = Yii::app()->getComponent('Student')->getStudentList($group_id);
        $arrayDataProvider = new CArrayDataProvider($rawData, array(
            'id' => 'id',
            'sort' => array(
                'attributes' => array(
                    'Name', 'English level',
                ),
            ),
            'pagination' => array(
                'pageSize' => 5,
            ),
        ));
        $params = array(
            'arrayDataProvider' => $arrayDataProvider,
        );
        $this->renderPartial('../site/studentList', $params);
    }
}
