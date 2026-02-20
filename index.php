<?php
declare(strict_types=1);

/**
 * PHP 8.3 Starter Page
 */

class ServerInfo {
    // PHP 8.3 Typed Constant
    public const string STATUS = "Active";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP 8.3 Environment</title>
    <style>
        body { font-family: system-ui, sans-serif; display: grid; place-content: center; min-height: 100vh; background: #f0f2f5; margin: 0; }
        .card { background: white; padding: 2rem; border-radius: 12px; shadow: 0 4px 6px rgba(0,0,0,0.1); border: 1px solid #ddd; }
        .version { color: #4F5B93; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <h1>PHP 8.3 is <span style="color: green;"><?= ServerInfo::STATUS ?></span></h1>
        <p>Current Version: <span class="version"><?= PHP_VERSION ?></span></p>
        <p>JSON Validation Check: <code><?= json_validate('{"valid":true}') ? 'Success' : 'Failed' ?></code></p>
        <p>Server Time: <?= date('H:i:s') ?></p>
    </div>
</body>
</html>
