<?php
/* @var $this FrutaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Frutas',
);

$this->menu=array(
	array('label'=>'Create Fruta', 'url'=>array('create')),
	array('label'=>'Manage Fruta', 'url'=>array('admin')),
);
?>

<h1>Frutas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
