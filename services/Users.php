<?php

namespace PhpBenchmarksYiiRest\services;

use PhpBenchmarksRestData\Service;
use PhpBenchmarksYiiRest\models\ShadowUser;

/**
 * Service for collection of Users.
 * Converts an array of Users in an array of array (with translation)
 * @author jcheron <myaddressmail@gmail.com>
 */
class Users
{
    public function serialize()
    {
        $result = [];
        foreach (Service::getUsers() as $entity) {
            $result[] = (new ShadowUser($entity))->toArray();
        }

        return $result;
    }
}
