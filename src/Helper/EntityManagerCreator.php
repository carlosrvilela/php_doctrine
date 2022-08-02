<?php

namespace Projeto\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator
{

    public static function createEntityManager(): EntityManager
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            [__DIR__."/..", ],
            isDevMode: true,
        );

        // database configuration parameters
        $conn = [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__.'/../../db.sqlite',
        ];

        // obtaining the entity manager
        return EntityManager::create($conn, $config);
    }

}