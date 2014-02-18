<?php
/**
 * @var SemesterController $this
 * @var \CActiveDataProvider $dataProvider
 */
$this->breadcrumbs = array(
    Yii::t('base', 'StudyPlan') => $this->createUrl('plan/index'),
    'Семестри'
);
?>
    <header>
        <?php $this->widget(
            Booster::BUTTON_GROUP,
            array(
                'buttons' => array(
                    array(
                        'type' => Booster::TYPE_PRIMARY,
                        'label' => 'Додати семестр',
                        'url' => $this->createUrl('create'),
                    ),
                ),
            )
        )
        ?>
    </header>
<?php
$this->widget(
    Booster::GRID_VIEW,
    array(
        'dataProvider' => $dataProvider,
        'template' => "{items}",
        'columns' => array(
            array('name' => 'semester_number', 'header' => 'Номер семестру'),
            array('name' => 'weeks_count', 'header' => 'Кількість тижнів'),
            array(
                'htmlOptions' => array('nowrap' => 'nowrap'),
                'class' => 'bootstrap.widgets.TbButtonColumn',
                'viewButtonUrl' => 'Yii::app()->createUrl("studyPlan/semester/view", array("id"=>$data["id"]))',
                'updateButtonUrl' => 'Yii::app()->createUrl("studyPlan/semester/update", array("id"=>$data["id"]))',
                'deleteButtonUrl' => 'Yii::app()->createUrl("studyPlan/semester/delete", array("id"=>$data["id"]))',
            ),
        ),
        'responsiveTable' => true,
        'type' => 'striped condensed bordered hover',
    )
);
?>