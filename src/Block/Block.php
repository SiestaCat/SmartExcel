<?php

declare( strict_types = 1 );

namespace MarcoFodor\RelativeSpreadSheet\Block;

use MarcoFodor\RelativeSpreadSheetBlock\ValueObject\BlockName;
use MarcoFodor\RelativeSpreadSheetBlock\ValueObject\Size;

interface Block
{
    public function name():BlockName;

    public function marginCol():Size;

    public function marginRow():Size;
}