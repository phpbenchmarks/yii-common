<?php
namespace PhpBenchmarksYiiRest\models;
/**
 * Shadow User with array conversion and translations
 * Inspired by phpbenchmarks/code-igniter-common
 */
use PhpBenchmarksRestData\User;



/**
 * @author jcheron <myaddressmail@gmail.com>
 *
 */
class ShadowUser extends User{
	
	public function __construct($entity){
		if ( ! empty($entity)){
			$this->id=$entity->getId();
			$this->login=$entity->getLogin();
			$this->createdAt=$entity->getCreatedAt();
			$this->comments=$entity->getComments();
		}
	}

	public function toArray(){
		$comments = [];
		foreach ($this->comments as $comment){
			$shadow = new ShadowComment($comment);
			$comments[] = $shadow->toArray();
		}
		$result = [
			'id'		 => $this->id,
			'login'		 => $this->login,
			'createdAt'	 => $this->createdAt->format('Y-m-d H:i:s'),
			'translated' => \Yii::t('phpbenchmarks','translated.1000'),
			'comments'	 => $comments
		];
		return $result;
	}

}
