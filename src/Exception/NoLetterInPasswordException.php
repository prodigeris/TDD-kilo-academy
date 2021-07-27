<?php

declare(strict_types=1);

namespace TDD\Exception;

use InvalidArgumentException;
use Throwable;

class NoLetterInPasswordException extends InvalidArgumentException
{
    public const MESSAGE = 'PASSWORD_CHECK_FAILED_NO_LETTER';

    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct(self::MESSAGE, $code, $previous);
    }
}
