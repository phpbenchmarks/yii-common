<?php
namespace PhpBenchmarksYiiRest\models;
/**
 * Shadow Commenttype with array conversion
 * Inspired by phpbenchmarks/code-igniter-common
 */
use PhpBenchmarksRestData\CommentType;

/**
 * @author jcheron <myaddressmail@gmail.com>
 *
 */
class ShadowCommentType extends CommentType{
	
	public function __construct($entity){
		if ( ! empty($entity)){
			$this->id=$entity->getId();
			$this->name=$entity->getName();
		}
	}

	public function toArray(){
		return [
				'id' => $this->id,
				'name' => $this->name,
				'translated' => \Yii::t('phpbenchmarks','translated.3000'),
		];
	}

}
