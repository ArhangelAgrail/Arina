<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
/*
if (isset(Yii::app()->user->identityId)) {
    echo 'Identity id -> ' . Yii::app()->user->identityId . '<br>';
}
if (isset(Yii::app()->user->identityType)) {
    echo 'Identity type -> ' . Yii::app()->user->identityType . '<br>';
}
    echo 'Id -> ' . Yii::app()->user->getId() . '<br>';*/

?>

<h1>Вітаємо вас в<i> <?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<div style="height: 300px"></div>