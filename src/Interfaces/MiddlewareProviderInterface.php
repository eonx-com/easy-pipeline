<?php
declare(strict_types=1);

namespace LoyaltyCorp\EasyPipeline\Interfaces;

interface MiddlewareProviderInterface
{
    /**
     * Get middleware list, middleware could be anything your container can resolve.
     *
     * @return mixed[]
     */
    public function getMiddlewareList(): array;
}

\class_alias(
    MiddlewareProviderInterface::class,
    'StepTheFkUp\EasyPipeline\Interfaces\MiddlewareProviderInterface',
    false
);
