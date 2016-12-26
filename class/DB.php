<?php

class DB
{
    protected $dbh;

    public function __construct()
    {
        $config = include __DIR__ . '/../db/config.php';
        $this->dbh = new PDO($config['dsn'], $config['login'], $config['pwd']);
    }

    public function execute(string $sql)
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute();
    }

    public function query(string $sql, array $data)
    {
        $sth = $this->dbh->prepare($sql);
        if (true == $sth->execute($data)) {
            return $sth->fetchAll();
        } else {
            return false;
        }
    }

}