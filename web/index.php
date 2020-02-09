<?php

require __DIR__ . '/../config/bootstrap.php';

// Include local configuration first so we can set the YII_* constants there
$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__.'/../config/web.php'),
    require(__DIR__.'/../config/local.php')
);

(new yii\web\Application($config))->run();
