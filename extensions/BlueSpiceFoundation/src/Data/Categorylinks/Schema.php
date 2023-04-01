<?php

namespace BlueSpice\Data\Categorylinks;

use MWStake\MediaWiki\Component\DataStore\FieldType;

class Schema extends \MWStake\MediaWiki\Component\DataStore\Schema {
	public function __construct() {
		parent::__construct( [
			Record::CATEGORY_TITLE => [
				self::FILTERABLE => true,
				self::SORTABLE => true,
				self::TYPE => FieldType::STRING
			],
			Record::PAGE_ID => [
				self::FILTERABLE => true,
				self::SORTABLE => true,
				self::TYPE => FieldType::INT
			],
			/**
			 * Creating a link is expensive and the result is not filterable by
			 * standard filters. Still they are important as hooks may modify
			 * their content (e.g. by providing data attributes or other) and
			 * they can contain additional information (e.g. redlink).
			 * Therefore links always get created _after_ filtering and paging!
			 */
			Record::CATEGORY_LINK => [
				self::FILTERABLE => false,
				self::SORTABLE => false,
				self::TYPE => FieldType::STRING
			],
			Record::CATEGORY_IS_EXPLICIT => [
				self::FILTERABLE => false,
				self::SORTABLE => false,
				self::TYPE => FieldType::BOOLEAN
			],
		] );
	}
}
