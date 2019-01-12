<?php

namespace yii2module\summary\domain\repositories\ar;

use yii2lab\domain\data\Query;
use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;

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