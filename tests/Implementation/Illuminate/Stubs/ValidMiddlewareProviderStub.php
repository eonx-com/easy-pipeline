<?php
declare(strict_types=1);

namespace LoyaltyCorp\EasyPipeline\Tests\Implementation\Illuminate\Stubs;

use LoyaltyCorp\EasyPipeline\Interfaces\MiddlewareProviderInterface;

final class ValidMiddlewareProviderStub implements MiddlewareProviderInterface
{
    /**
     * Get middleware list, middleware could be anything your container can resolve.
     *
     * @return mixed[]
     */
    public function getMiddlewareList(): array
    {
        return ['middleware1', 'middleware2'];
    }
}

\class_alias(
    ValidMiddlewareProviderStub::class,
    'StepTheFkUp\EasyPipeline\Tests\Implementation\Illuminate\Stubs\ValidMiddlewareProviderStub',
    false
);
