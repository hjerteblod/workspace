<?php

namespace CashMachine\Core;

use PDO;

require __DIR__ . '/../../config/database.php';

class Database
{

  /**
   * @var mixed
   */
  private $connection;

  /**
   * @param mixed $host
   * @param mixed $username
   * @param mixed $password
   * @param mixed $dbname
   * @param mixed $charset
   */
  public function __construct($host, $username, $password, $dbname, $charset)
  {

    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
    $options = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $this->connection = new PDO($dsn, $username, $password, $options);
  }

  /**
   * @return Database
   */
  public static function getInstance(): self
  {
    if ($GLOBALS['db'] !== null) {
      return $GLOBALS['db'];
    }

    $GLOBALS['db'] = new self(DBHOST, DBUSERNAME, DBPASSWORD, DBNAME, CHARSET);

    return $GLOBALS['db'];
  }

  public function __destruct()
  {
    if ($this->connection !== NULL) {
      $this->connection = NULL;
    }
  }

  /**
   * @return PDO|void
   */
  public function getConnection()
  {
    if ($this->connection instanceof PDO)
      return $this->connection;
  }


}
