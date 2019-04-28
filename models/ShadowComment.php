<?php

namespace PhpBenchmarksYiiRest\models;

/**
 * Shadow User with array conversion
 * Inspired by phpbenchmarks/code-igniter-common
 */
use PhpBenchmarksRestData\Comment;

/** @author jcheron <myaddressmail@gmail.com> */
class ShadowComment extends Comment
{
    /** @param Comment $entity */
    public function __construct($entity)
    {
        if ($entity instanceof Comment) {
            $this->id = $entity->getId();
            $this->message = $entity->getMessage();
            $this->type = $entity->getType();
        }
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'message' => $this->message,
            'translated' => \Yii::t('phpbenchmarks', 'translated.2000'),
            'type' => (new ShadowCommentType($this->getType()))->toArray()
        ];
    }
}
