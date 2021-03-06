<?php

namespace yii2module\summary\domain\services;

use Yii;
use yii2rails\app\domain\helpers\EnvService;
use yii2rails\domain\services\base\BaseActiveService;

class StaticService extends BaseActiveService {
	
	public function oneUrl($logo, $name) {
		if(empty($logo) || empty($name)) {
			return null;
		}
		$summaryEntity = \App::$domain->summary->static->oneById($name);
		$baseUrl = EnvService::getStaticUrl($summaryEntity->value);
		return $baseUrl . SL . $logo;
	}
	
}
