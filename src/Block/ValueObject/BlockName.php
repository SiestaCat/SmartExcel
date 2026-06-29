<?php

declare( strict_types = 1 );

namespace MarcoFodor\RelativeSpreadSheetBlock\ValueObject;

use MarcoFodor\RelativeSpreadSheetBlock\ValueObject\Exception\EmptyBlockNameException;
use MarcoFodor\RelativeSpreadSheetBlock\ValueObject\Exception\NullBlockNameException;
use Override;
use Stringable;

use function is_string, mb_trim, mb_strlen;

final readonly class BlockName implements Stringable
{
    private ?string $value;

    private function __construct(?string $value)
    {
        if(is_string(value: $value))
        {
            $value = mb_trim(string: $value);
            if(mb_strlen(string: $value) < 1)
            {
                throw new EmptyBlockNameException(value: $value);
            }
        }

        $this->value = $value;
    }

    #[Override]
    public function __toString(): string
    {
        if(is_null($this->value))
        {
            throw new NullBlockNameException;
        }

        return $this->value;
    }

    public function value(): ?string
    {
        return $this->value;
    }

    public static function fromString(string $value): self
    {
        return new self(value: $value);
    }

    public static function createNull(): self
    {
        return new self(value: null);
    }
}