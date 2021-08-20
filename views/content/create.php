<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model d4yii2\yii2\wiki\models\Wiki */

$this->title = 'Create Wiki';
?>

<h1><?= Html::encode($this->title) ?></h1>

<?= $this->render('partials/_form', [
	'model' => $model,
]) ?>
