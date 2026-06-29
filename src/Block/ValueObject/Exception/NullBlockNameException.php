<?php

declare( strict_types = 1 );

namespace MarcoFodor\RelativeSpreadSheetBlock\ValueObject\Exception;

use InvalidArgumentException;
use Override;

final class NullBlockNameException extends InvalidArgumentException
{
    #[Override]
    final public function __construct()
    {
        return parent::__construct(message: 'Cannot call __toString() on a null block name');
    }
}