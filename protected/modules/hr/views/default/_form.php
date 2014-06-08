<?php
/* @var $this DefaultController */
/* @var $model Employee */
/* @var $form TbctiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget(BoosterHelper::FORM, array(
        'id' => 'student-form',

        'enableClientValidation' => true,
    )); ?>

    <p class="note"><?php echo Yii::t('base', 'Fields with <span class="required">*</span> are required.'); ?></p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <div class="span12">
            <?php echo $form->checkBoxRow($model, 'participates_in_study_process', array()); ?>

            <?php echo $form->dateFieldRow($model, 'start_date', array()); ?>

            <?php echo $form->dropDownListRow($model, 'position_id', Position::getListAll('id', 'title'), array('empty' => Yii::t('position', 'Select position'))); ?>

            <?php echo $form->textFieldRow($model, 'last_name', array('size' => 40, 'maxlength' => 40)); ?>

            <?php echo $form->textFieldRow($model, 'first_name', array('size' => 40, 'maxlength' => 40)); ?>

            <?php echo $form->textFieldRow($model, 'middle_name', array('size' => 40, 'maxlength' => 40)); ?>

            <?php if (!$model->getIsNewRecord()) echo $form->textFieldRow($model, 'short_name', array('size' => 40, 'maxlength' => 40)); ?>

            <?php echo $form->dropDownListRow($model, 'gender', array(0 => Yii::t('terms', 'Male'), 1 => Yii::t('terms', 'Female'),), array('empty' => Yii::t('terms', 'Select gender'))); ?>

            <?php echo $form->dateFieldRow($model, 'birth_date', array()); ?>

            <?php echo $form->textFieldRow($model, 'nationality', array('size' => 40, 'maxlength' => 40)); ?>

            <?php echo $form->dropDownListRow($model, 'education', EmployeeHelper::getEducationTypes()); ?>


            <!--@todo Add educations list control-->
            <?php $this->widget('hr.widgets.TableInput',
                array(
                    'model'=> $model,
                    'name'=>'educations_list',
                    'fields' => array(
                        '0' => 'Назва освітнього закладу',
                        '1' => 'Диплом (свідоцтво) серія, номер',
                        '2' => 'Рік закінчення',
                        '3' => 'Спеціальність (професія) за дипломом (свідоцтвом)',
                        '4' => 'Кваліфікація за дипломом (свідоцтвом)',
                        '5' => 'Форма навчання',
                    )
                )
            ); ?>


            <?php echo $form->dropDownListRow($model, 'postgraduate_training', EmployeeHelper::getPostgraduateTypes()); ?>

            <!--@todo Add postgraduate list control-->

            <?php echo $form->textFieldRow($model, 'last_job', array('size' => 255, 'maxlength' => 255)); ?>

            <?php echo $form->textFieldRow($model, 'last_job_position', array('size' => 40, 'maxlength' => 40)); ?>

            <?php echo $form->checkBoxRow($model, 'has_experience', array()); ?>

            <?php echo $form->dateFieldRow($model, 'experience_start', array()); ?>

            <?php echo $form->dateFieldRow($model, 'experience_end', array()); ?>

            <?php echo $form->dropDownListRow($model, 'dismissal_reason', EmployeeHelper::getDismissalReasons()); ?>

            <?php echo $form->dateFieldRow($model, 'dismissal_date', array()); ?>

            <?php echo $form->textFieldRow($model, 'pension_data', array('size' => 255, 'maxlength' => 255)); ?>

            <?php echo $form->textFieldRow($model, 'family_status', array('size' => 255, 'maxlength' => 255)); ?>

            <!--@todo Add family states control-->

            <?php echo $form->textFieldRow($model, 'place_of_residence', array('size' => 255, 'maxlength' => 255)); ?>

            <?php echo $form->textFieldRow($model, 'place_of_registration', array('size' => 255, 'maxlength' => 255)); ?>

            <?php echo $form->textFieldRow($model, 'passport', array('size'=>40, 'maxlength'=>'40'));  ?>

            <?php echo $form->textFieldRow($model, 'passport_issued_by', array('size'=>40, 'maxlength'=>'40'));  ?>

            <?php echo $form->textFieldRow($model, 'military_accounting_group', array('size'=>40, 'maxlength'=>'40'));  ?>

            <?php echo $form->textFieldRow($model, 'military_accounting_category', array('size'=>40, 'maxlength'=>'40'));  ?>

            <?php echo $form->textFieldRow($model, 'military_composition', array('size'=>40, 'maxlength'=>'40'));  ?>

            <?php echo $form->textFieldRow($model, 'military_rank', array('size'=>40, 'maxlength'=>'40'));  ?>

            <?php echo $form->textFieldRow($model, 'military_accounting_speciality_number', array('size'=>40, 'maxlength'=>'40'));  ?>

            <?php echo $form->checkBoxRow($model, 'military_suitability', array()); ?>

            <?php echo $form->textFieldRow($model, 'military_district_office_registration_name', array('size'=>40, 'maxlength'=>'40'));  ?>

            <?php echo $form->textFieldRow($model, 'military_district_office_residence_name', array('size'=>40, 'maxlength'=>'40'));  ?>



        </div>


    </div>

    <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('base', 'Create') : Yii::t('base', 'Save'), array('class' => 'btn')); ?>

    <?php $this->endWidget(); ?>
</div><!-- form -->