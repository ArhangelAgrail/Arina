<?php
/**
 * @var WorkController $this
 * @var WorkPlan $model
 * @var TbActiveForm $form
 */
$form = $this->beginWidget(
    BoosterHelper::FORM,
    array(
        'type' => 'horizontal',
        'htmlOptions' => array(
            'class' => 'well',
        ),
        'id'=>'graph-form',
    )
);

echo $form->errorSummary($model);

$this->widget(
    'studyPlan.widgets.Graph',
    array(
        'model' => $model,
        'field' => '',
        'graph' => $model->graph,
        'specialityId' => $model->speciality_id,
        'studyYearId' => $model->year_id,
        'studyPlan' => false
    )
);

$this->renderPartial('//formButtons', array('model' => $model));
$this->endWidget();