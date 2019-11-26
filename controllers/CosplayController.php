<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use app\forms\CosplayForm;


class CosplayController extends Controller
{
	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'actions' => ['list'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
		];
	}

	public function actionList()
	{
		$model = new CosplayForm;
		return $this->render('list',compact('model'));
	}

}
