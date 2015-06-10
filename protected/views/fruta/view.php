<?php
/* @var $this FrutaController */
/* @var $model Fruta */

$this->breadcrumbs=array(
	'Frutas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Fruta', 'url'=>array('index')),
	array('label'=>'Create Fruta', 'url'=>array('create')),
	array('label'=>'Update Fruta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Fruta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fruta', 'url'=>array('admin')),
);
?>

<h1>View Fruta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
