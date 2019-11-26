<?php

namespace app\forms;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cosplay;

class CosplayForm
{

	public function rules()
	{
		return [
			[],
		];
	}


	public function search()
	{
		$query = Cosplay::find();

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
			'pagination' => [
				'pageSize' => 20,
			],
		]);

		return $dataProvider;
	}
}
