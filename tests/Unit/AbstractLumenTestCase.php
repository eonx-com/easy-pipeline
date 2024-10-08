<?php
declare(strict_types=1);

namespace EonX\EasyPipeline\Tests\Unit;

use Laravel\Lumen\Application;

abstract class AbstractLumenTestCase extends AbstractUnitTestCase
{
    private ?Application $app = null;

    protected function getApplication(): Application
    {
        if ($this->app !== null) {
            return $this->app;
        }

        $this->app = new Application(__DIR__);

        return $this->app;
    }
}
