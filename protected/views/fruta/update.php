<?php
/* @var $this FrutaController */
/* @var $model Fruta */

$this->breadcrumbs=array(
	'Frutas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fruta', 'url'=>array('index')),
	array('label'=>'Create Fruta', 'url'=>array('create')),
	array('label'=>'View Fruta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Fruta', 'url'=>array('admin')),
);
?>

<h1>Update Fruta <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>