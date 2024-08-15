<?php
declare(strict_types=1);

namespace EonX\EasyPipeline\Exception;

use EonX\EasyPipeline\Exception\EasyPipelineExceptionInterface as ExceptionInterface;
use InvalidArgumentException;

final class InvalidMiddlewareProviderException extends InvalidArgumentException implements ExceptionInterface
{
    // No body needed
}