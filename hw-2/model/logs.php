<?php

//define ("LOGS_PATH", 'db/logs/');
const LOGS_PATH = 'db/logs';
const REGEXP_FILENAME = '/^\d{4}\-\d{2}\-\d{2}\.txt$/';

/**
 * return all log files (default one file per day)
 * @return array array of strings of log files
 */
function getAllLogs(): array
{
    $logFiles = scandir(LOGS_PATH);
    $propertyLogFiles = [];

    // make property array of strings of log files
    foreach ($logFiles as $fileName) {
        $fileNameWithoutExtension = substr($fileName, 0, -4);
        if (is_file(LOGS_PATH . "/$fileName")
            && checkLogFileName($fileName)) {
            array_push($propertyLogFiles, $fileNameWithoutExtension);
        }
    }
    return $propertyLogFiles;
}

function getDailyLogs(string $day): array
{
    $rows =  file(LOGS_PATH."/$day.txt");
    return array_map(function ($row) {
         return explode(";", rtrim($row));
    }, $rows);
}

/**
 * @param $serverInfo array — put $_SERVER here
 */
function createLog(): string
{
    // The elements that the log string consists of
    $currentTime = date('H:i:s');
    $userIP = $_SERVER['REMOTE_ADDR'];
    $refererLink = $_SERVER['HTTP_REFERER'] ?? 'direct link';
    $requestURI = urldecode($_SERVER['REQUEST_URI']);
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    if (checkValidityRequestURI($requestURI)) {
        return "$currentTime;$userIP;$requestURI;$refererLink;$requestMethod\n";
    } else {
        return "$currentTime;$userIP;$requestURI;$refererLink;$requestMethod;!warning!\n";
    }

}

function logRequest()
{
    $filename = getLogFileName();
    file_put_contents(LOGS_PATH . "/$filename.txt", createLog(), FILE_APPEND);
}

/**
 * Method gets filename for log file without extension
 * when changing here - you need to change the regular expression
 * @return string the filename without extension
 * @see REGEXP_FILENAME
 */
function getLogFileName(): string
{
    return date("Y-m-d");
}

function checkLogFileName(string $fileName): bool
{
    return !!preg_match(REGEXP_FILENAME, $fileName);
}

/**
 * check for valid URI (that has been request from user)
 * @param $requestURI URI
 * @return bool TRUE, if URI is valid, otherwise — FALSE
 */
function checkValidityRequestURI(string $requestURI): bool
{
    return !!preg_match('/^[aA-zZ0-9\-_\/\?\.=&]*$/', $requestURI);
}

/**
 * @param $logString string log string
 * @return bool TRUE, if in the log string has warning flag, otherwise FALSE
 */
function checkForBadLog(array $logString): bool
{
    if (array_search('!warning!', $logString) !== false) {
        return true;
    } else {
        return false;
    }
}

/**
 * Check for correct day to find log file by this day (Check for correct log filename)
 * @param string $date — date to find filename by date
 * @return bool TRUE , when correct filename, FALSE — when incorrect
 */
function checkLogDay(string $date): bool{
    return checkLogFileName("$date.txt") && file_exists(LOGS_PATH."/$date.txt");
}