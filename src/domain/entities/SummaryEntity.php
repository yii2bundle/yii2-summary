<?php

namespace yii2module\summary\domain\entities;

use yii2rails\domain\BaseEntity;
use yii2rails\domain\values\TimeValue;

class SummaryEntity extends BaseEntity {
	
	protected $name;
	protected $type;
	protected $value;
	protected $date_change;
	
	public function fieldType() {
		return [
			'date_change' => TimeValue::class,
		];
	}
}
