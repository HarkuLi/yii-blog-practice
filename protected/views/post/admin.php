<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs = [
    'Manage Posts'
];
?>
<h1>Manage Posts</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', [
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => [
        [
            'name' => 'title',
            'type' => 'raw',
            // $data is got from dataProvider
            'value' => 'CHtml::link(CHtml::encode($data->title), $data->url)'
        ],
        [
            'name' => 'status',
            'value' => 'Lookup::item("PostStatus", $data->status)',
            'filter' => Lookup::items('PostStatus')
        ],
        [
            'name' => 'create_time',
            'type' => 'datetime',
            'filter' => false
        ],
        [
            'class' => 'CButtonColumn'
        ]
    ]
]);
?>
