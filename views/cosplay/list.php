<?php

use yii\widgets\Pjax;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

$url = ['cosplay/list'];
?>

<?php $this->title = Yii::t('app','Cosplay List');?>



<div class="row">

	<div class="col-md-12">
		<h3 class="text-left"><?= $this->title ?></h3>
	</div>

	<div class="col-md-12">

		<?php $form = ActiveForm::begin([
			'layout' => 'inline',
			'method' => 'get',
			'action' => Url::to($url),
			'options' => ['data-pjax' => true],
			'fieldConfig' => [
				'labelOptions' => [
					'class' => '',
				],
				'inputOptions' => [
					'class' => 'input-sm form-control',
				],
			],
		]); ?>

		<?php $gridColumns = [
		]
		?>

		<?= GridView::widget([
			'dataProvider' => $model->search(),
			'layout' => '{items}{summary}{pager}',
			'tableOptions' => [
				'class' => 'table table-striped table-bordered table-condensed table-hover',
			],
			'options' => [
				'class' => 'grid-view table-responsive',
			],
			//'columns' => $gridColumns,
		]); ?>

	</div>
	<?php ActiveForm::end(); ?>
</div>

