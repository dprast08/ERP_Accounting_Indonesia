<?php
/* @var $this SAddressbookController */
/* @var $model sAddressbook */

$this->breadcrumbs = array(
    'S Addressbooks' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List sAddressbook', 'url' => array('index')),
    array('label' => 'Manage sAddressbook', 'url' => array('admin')),
);
?>

<h1>Create sAddressbook</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>