<?php

declare( strict_types = 1 );

namespace MarcoFodor\RelativeSpreadSheet\Block;

use MarcoFodor\RelativeSpreadSheetBlock\ValueObject\BlockName;
use MarcoFodor\RelativeSpreadSheetBlock\ValueObject\Margin;

interface Block
{
    public function name():BlockName;

    public function marginCol():Margin;

    public function marginRow():Margin;
}