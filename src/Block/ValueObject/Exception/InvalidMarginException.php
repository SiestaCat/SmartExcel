<?php

declare( strict_types = 1 );

namespace MarcoFodor\RelativeSpreadSheetBlock\ValueObject\Exception;

use InvalidArgumentException;
use Override;

final class InvalidMarginException extends InvalidArgumentException
{
    #[Override]
    final public function __construct(int $value)
    {
        return parent::__construct(message: sprintf('Margin must be greater than or equal to 0. Got %d.', $value));
    }
}