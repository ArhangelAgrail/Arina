<?php
/**
 *
 * @author Dmytro Karpovych <ZAYEC77@gmail.com>
 */
$menu = array(
    array('label' => Yii::t('base', 'Home'), 'url' => array('/site/index'),),
    //  array('label' => Yii::t('base', 'Schedule'), 'url' => array('/schedule/index')),
    array('label' => Yii::t('base', 'Groups'), 'url' => array('/group')),
    array('label' => Yii::t('base', 'Audiences'), 'url' => array('/audience')),
    array('label' => Yii::t('base', 'Teachers'), 'items'=>array(
        array('label' => Yii::t('base', 'List'), 'url' => array('/teacher'),),
        array('label' => Yii::t('base', 'Cyclic commissions'), 'url' => array('/cyclicCommission')),
    )),
    array('label' => Yii::t('base', 'Study plans'), 'url' => array('/studyPlan')),
    array('label' => Yii::t('base', 'Students'), 'url' => array('/student')),
    array('label' => Yii::t('base', 'Specialities'), 'url' => array('/speciality')),
    array('label' => Yii::t('base', 'Departments'), 'url' => array('/department')),
    array('label' => Yii::t('base', 'Subjects'), 'items' => array(
        array('label' => Yii::t('base', 'List'), 'url' => array('/subject')),
        array('label' => Yii::t('base', 'Cycles'), 'url' => array('/cycle')),
    )),
    array('label' => Yii::t('base', 'Journal'), 'url' => array('/journal')),
);