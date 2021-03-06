<?php

namespace yii2module\summary\domain\services;

use yii\helpers\ArrayHelper;
use yii2rails\domain\data\Query;
use yii2module\summary\domain\interfaces\services\BaseInterface;

/**
 * Class BaseService
 *
 * @package yii2module\summary\domain\services
 *
 * @property \yii2module\summary\domain\Domain $domain
 */
abstract class BaseService extends \yii2rails\domain\services\base\BaseService implements BaseInterface {
	
	const TYPE = null;
	
	private $cacheMap;
	
	public function oneByName($name) {
		return ArrayHelper::getValue($this->map(), $name);
	}
	
	public function map() {
		if(!isset($this->cacheMap)) {
			$collection = $this->all();
			$this->cacheMap = ArrayHelper::map($collection, 'name', 'value');
		}
		return $this->cacheMap;
	}
	
	public function all(Query $query = null) {
		$query = Query::forge($query);
		$query->where('type', static::TYPE);
		$collection = $this->domain->summary->repository->all($query);
		return $collection;
	}
	
}
