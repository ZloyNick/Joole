<?php

declare(strict_types=1);

/**
 * The base page of
 */
\joole\components\routing\router\BaseRouter::register(
    'test', '/', static function () : \joole\framework\http\response\Response{
    $composerJsonContent = file_get_contents(__DIR__ . '/../composer.json');

    if (!$composerJsonContent) {
        $version = '';
    } else {
        $composerData = json_decode($composerJsonContent, true);

        if (!$composerData || !isset($composerData['version'])) {
            $version = '';
        } else {
            $version = $composerData['version'];
        }
    }

    return response()->withOutput(
        (string)app()->getRenderer()->renderView('welcome.php', compact('version'))
    );
});