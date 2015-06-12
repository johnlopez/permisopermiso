<?php
/* @var $this FrutaController */
/* @var $model Fruta */

$this->breadcrumbs=array(
	'Frutas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fruta', 'url'=>array('index')),
	array('label'=>'Manage Fruta', 'url'=>array('admin')),
);
?>

<h1>Create Fruta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>