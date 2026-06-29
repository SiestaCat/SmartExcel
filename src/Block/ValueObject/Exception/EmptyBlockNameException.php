<?php

declare( strict_types = 1 );

namespace MarcoFodor\RelativeSpreadSheetBlock\ValueObject\Exception;

use InvalidArgumentException;
use Override;

use function sprintf;

final class EmptyBlockNameException extends InvalidArgumentException
{
    #[Override]
    final public function __construct(string $value)
    {
        return parent::__construct(message: sprintf('Block name "%s" must be at least 1 character long', $value));
    }
}