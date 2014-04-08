<?php
/**
 * @author Serhiy Vinichuk <serhiyvinichuk@gmail.com>
 * @var MainController $this
 * @var \PlanSubjects $model
 * @var TbActiveForm $form
 */
?>
<div id="reloaded">
    <?php $form = $this->beginWidget(Booster::FORM, array(
        'id' => 'subjects-form',
        'htmlOptions' => array('class' => 'well span11', 'model_id' => $model->planId),
    )); ?>
    <div class="span3">
        <?php echo $form->dropDownListRow($model, 'subjectId', $model->getNotAddedSubjects(), array('size' => 6)); ?>
    </div>
    <div class="span3">
        <div>
            <?php echo $form->textFieldRow($model, 'total_hours'); ?>
        </div>
        <?php echo CHtml::link(
            Yii::t('base', 'Add'),
            $this->createUrl('subjects', array('id' => $model->planId)),
            array('class' => 'btn bind', 'id' => 'yt0'));
        ?>
    </div>
    <div class="span4">
        <div><span><?php echo Yii::t('studyPlan', 'Subjects in the plan'); ?></span></div>
        <?php $this->widget(Booster::GRID_VIEW, array(
            'dataProvider' => $model->getAddedSubjectsProvider(),
            'columns' => array(
                array(
                    'header' => Yii::t('terms', 'Subject'),
                    'name' => 'subject.title',
                ),
                array(
                    'header' => Yii::t('terms', 'Hours'),
                    'name' => 'total_hours',
                ),
                array(
                    'htmlOptions' => array('nowrap' => 'nowrap'),
                    'class' => 'bootstrap.widgets.TbButtonColumn',
                    'template' => "{delete}",
                    'deleteButtonUrl' => 'Yii::app()->controller->createUrl("deleteSubject", array("id"=>$data->id))',
                    'deleteButtonOptions' => array('class' => 'btn bind'),
                ),
            ),
            'responsiveTable' => true,
            'type' => 'striped condensed bordered hover',
        )); ?>
        <?php echo CHtml::link(Yii::t('base', 'Next'), $this->createUrl('semesters', array('id' => $model->planId)), array('class' => 'btn bind')); ?>
    </div>
</div>
<?php $this->endWidget(); ?>
<script>
    $(makeHandler()); //Make handler for an ajax link
</script>