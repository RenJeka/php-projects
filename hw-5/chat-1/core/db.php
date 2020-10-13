 <?php

/**
 * Settings instance of connection to DataBase
 * @return PDO
 */
function dbInstance(): PDO{
    // Create singleton DB - connection
    static $db;
    if ($db === null) {
        $db = new PDO('mysql:host=localhost;dbname=php1simple', 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        $db->exec('SET NAMES UTF8');
    }
    return $db;
}

/**
 * preparation query to avoid SQL injection attack
 * @param string $sql target sql-query
 * @param array $params parameters to inject into query mask-places
 * @return PDOStatement
 */
function dbPrepareQuery(string $sql, array $params=[]): PDOStatement{
    $db = dbInstance();
    $preparedSqlQuery = $db->prepare($sql);
    $preparedSqlQuery->execute($params);
    dbCheckError($preparedSqlQuery);
    return $preparedSqlQuery;
}

/**
 * check on SQL-errors for prepared sql-query
 * @param PDOStatement $preparedSqlQuery
 * @return bool true if no errors, otherwise terminating the script
 */
function dbCheckError(PDOStatement $preparedSqlQuery){
    $errInfo = $preparedSqlQuery->errorInfo();

    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
    return true;
}