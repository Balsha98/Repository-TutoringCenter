<?php

namespace Source\Handlers\Core\Database;

use Exception;
use PDO, PDOStatement;

class Database
{
    private static PDO $pdo;
    private static Database $instance;
    private PDOStatement $statement;

    private function __construct(string $db, string $user, string $pass)
    {
        $dsn = 'mysql:dbname=' . $db . ';host=localhost';
        self::$pdo = new PDO($dsn, $user, $pass);
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Database(DB_NAME, DB_USER, DB_PASS);
        }

        return self::$instance;
    }

    private function isQueryOfType(string $type)
    {
        return preg_match('#' . $type . '#', $this->statement->queryString);
    }

    public function executeQuery($query, $params = [])
    {
        $this->statement = self::$pdo->prepare($query);

        if (!empty($params)) {
            foreach ($params as $key => $value) {
                $type = is_numeric($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
                $this->statement->bindValue($key, $value, $type);
            }
        }

        return $this;
    }

    public function getQueryResult(bool $isAssoc)
    {
        try {
            $return = [];

            if ($this->isQueryOfType('SELECT')) {
                if (!$this->statement->execute()) {
                    throw new Exception('Error processing FETCH prepared statement.');
                }

                $isSingleRow = $this->statement->rowCount() === 1;
                $this->statement->setFetchMode($isAssoc ? PDO::FETCH_ASSOC : PDO::FETCH_BOTH);
                $return = $isSingleRow ? $this->statement->fetch() : $this->statement->fetchAll();
            }

            if (!$this->statement->execute()) {
                throw new Exception('Error processing ALTER prepared statement.');
            }
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }

        return $return;
    }
}
