<?php

namespace Linshunwei\QRCodeReader\Lib;

interface Reader
{
    public function decode(BinaryBitmap $image);

    public function reset();
}
