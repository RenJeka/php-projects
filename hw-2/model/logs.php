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
    return file(LOGS_PATH."/$day.txt");
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
    $requestURI = $_SERVER['REQUEST_URI'];
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    if (checkRequestURI($requestURI)) {
        return "$currentTime;$userIP;$requestURI;$refererLink;$requestMethod;!warning!\n";
    } else {
        return "$currentTime;$userIP;$requestURI;$refererLink;$requestMethod\n";
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

function checkRequestURI($requestURI)
{
    $badStrings = true; // Проверка  регулярным выражением на подозрительные элементы строки
    return $badStrings;
}

/**
 * @param $logString string log string
 * @return bool TRUE, if in the log string has warning flag, otherwise FALSE
 */
function checkForBadLog(string $logString): bool
{
    $logString = rtrim($logString);
    $parts = explode(";", $logString);
    if ($parts[count($parts) - 1] === "!warning!") {
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