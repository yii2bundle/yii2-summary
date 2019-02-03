<?php

namespace yii2module\summary\domain\repositories\ar;

use yii2rails\domain\data\Query;
use yii2rails\extension\activeRecord\repositories\base\BaseActiveArRepository;

class SummaryRepository extends BaseActiveArRepository {
	
	public function tableName() {
		return 'summary_resource';
	}
	
	public function allByType($type) {
		$query = Query::forge();
		$query->where('type', $type);
		$collection = $this->all($query);
		return $collection;
	}
}