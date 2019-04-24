<?php
declare(strict_types=1);

namespace LoyaltyCorp\EasyPipeline\Interfaces;

interface MiddlewareLoggerInterface
{
    /**
     * Log given content for given middleware.
     *
     * @param string $middleware
     * @param mixed $content
     *
     * @return void
     */
    public function log(string $middleware, $content): void;
}

\class_alias(
    MiddlewareLoggerInterface::class,
    'StepTheFkUp\EasyPipeline\Interfaces\MiddlewareLoggerInterface',
    false
);
