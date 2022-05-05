<?php

declare(strict_types=1);

namespace app;

use joole\framework\Application as BaseApplication;
use joole\framework\data\types\ImmutableArray;

/**
 * Class Application based on joole-framework's application class
 */
class Application extends BaseApplication
{

    /** @var \ArrayAccess|array Containers */
    public \ArrayAccess|array $containers;

    public function run()
    {
        parent::run();

        /** @var array|ImmutableArray $containers */
        $containers = $this->getComponent('containers');
        $this->containers = $containers;
    }

}