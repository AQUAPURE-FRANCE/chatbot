<?php

namespace Chatbot\Repository;

use Doctrine\DBAL\Connection;

class ChatbotConfigurationRepository
{
    /**
     * @var Connection the Database connection
     */
    private $connection;

    /**
     * @var string the Database prefix
     */
    private $databasePrefix;

    /**
     * SymfonyModuleRepository constructor.
     * @param Connection $connection
     * @param $databasePrefix
     */
    public function __construct(Connection $connection, $databasePrefix)
    {
        $this->connection = $connection;
        $this->databasePrefix = $databasePrefix;
    }

    public function findByKeyPrefix($keyPrefix)
    {
        return $this->connection->createQueryBuilder()
            ->addSelect("c.id_configuration", "c.name", "c.value")
            ->from($this->databasePrefix . 'configuration', 'c')
            ->where('c.name LIKE :prefix')
            ->setParameter('prefix', '%' . $keyPrefix . '%')
            ->execute()
            ->fetchAll();
    }
}
