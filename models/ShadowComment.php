<?php
namespace PhpBenchmarksYiiRest\models;
/**
 * Shadow User with array conversion
 * Inspired by phpbenchmarks/code-igniter-common
 */
use PhpBenchmarksRestData\Comment;


/**
 * @author jcheron <myaddressmail@gmail.com>
 *
 */
class ShadowComment extends Comment{
	private $translator;
	public function __construct($entity){
		if ( ! empty($entity))
		{
			$this->id=$entity->getId();
			$this->message=$entity->getMessage();
			$this->type=$entity->getType();
		}
	}

	public function toArray(){
		$type = new ShadowCommentType($this->getType());
		$result = [
			'id'		 => $this->id,
			'message'	 => $this->message,
			'translated' => \Yii::t('phpbenchmarks','translated.2000'),
			'type'		 => $type->toArray()
		];
		return $result;
	}

}
