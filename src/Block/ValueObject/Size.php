<?php

declare( strict_types = 1 );

namespace MarcoFodor\RelativeSpreadSheetBlock\ValueObject;

use MarcoFodor\RelativeSpreadSheetBlock\ValueObject\Exception\InvalidSizeException;

final readonly class Size
{
    private function __construct(private int $value)
    {
        if($value < 0)
        {
            throw new InvalidSizeException($value);
        }
    }

    public function value(): int
    {
        return $this->value;
    }
}