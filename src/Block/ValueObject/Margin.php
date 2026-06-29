<?php

declare( strict_types = 1 );

namespace MarcoFodor\RelativeSpreadSheetBlock\ValueObject;

use MarcoFodor\RelativeSpreadSheetBlock\ValueObject\Exception\InvalidMarginException;

final readonly class Margin
{
    private function __construct(private int $value)
    {
        if($value < 0)
        {
            throw new InvalidMarginException($value);
        }
    }

    public function value(): int
    {
        return $this->value;
    }
}