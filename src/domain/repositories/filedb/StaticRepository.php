<?php

namespace yii2module\summary\domain\repositories\filedb;

use yii2rails\domain\data\Query;
use yii2rails\extension\filedb\repositories\base\BaseActiveFiledbRepository;
use yii2module\summary\domain\entities\SummaryEntity;

class StaticRepository extends BaseActiveFiledbRepository {
	
	protected $primaryKey = 'name';
	
	public function tableName() {
		return 'summary_static';
	}

    /**
     * @return string
     */
    public function getPrimaryKey()
    {
        return 'name';
    }

	public function forgeEntity($data, $class = null)
    {
        return parent::forgeEntity($data, SummaryEntity::class);
    }

}