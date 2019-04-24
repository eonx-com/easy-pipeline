<?php
declare(strict_types=1);

namespace LoyaltyCorp\EasyPipeline\Tests;

use Laravel\Lumen\Application;

abstract class AbstractLumenTestCase extends AbstractTestCase
{
    /**
     * @var \Laravel\Lumen\Application
     */
    private $app;

    /**
     * Get lumen application.
     *
     * @return \Laravel\Lumen\Application
     */
    protected function getApplication(): Application
    {
        if ($this->app !== null) {
            return $this->app;
        }

        return $this->app = new Application(__DIR__);
    }
}

\class_alias(
    AbstractLumenTestCase::class,
    'StepTheFkUp\EasyPipeline\Tests\AbstractLumenTestCase',
    false
);
