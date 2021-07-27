<?php

declare(strict_types=1);

namespace TDD\Exception;

use InvalidArgumentException;
use Throwable;

class TooShortPasswordException extends InvalidArgumentException
{
    public const PASSWORD_CHECK_FAILED_TOO_SHORT = 'PASSWORD_CHECK_FAILED_TOO_SHORT';

    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct(self::PASSWORD_CHECK_FAILED_TOO_SHORT, $code, $previous);
    }
}
