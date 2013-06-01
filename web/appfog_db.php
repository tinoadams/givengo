<?php
$env = getenv("VCAP_SERVICES");
$appFogConfig = json_decode($env ? $env : '{}', true);
$dbConfig = isset($appFogConfig['mysql-5.1'][0]['credentials']) ? $appFogConfig['mysql-5.1'][0]['credentials'] : null;

function getPDO() {
    global $dbConfig;
    if (!$dbConfig) {
        die('No AppFog DB config found in: appFogConfig[mysql-5.1][0][credentials]');
    }

    $dns = 'mysql:dbname='.$dbConfig['name'].';host='.$dbConfig['host'].';port='.$dbConfig['port']; 
    return new PDO($dns, $dbConfig['username'], $dbConfig['password']);
}
