<?php namespace Linshunwei\QRCodeReader;


use Linshunwei\QRCodeReader\Lib\QrReader;

class QRCodeReader
{

    /**
     * @param $path_to_image
     * @return bool|string decoded text from QR Code
     */
    public function decode($path_to_image)
    {
        $qrcode = new QrReader($path_to_image);
        $text = $qrcode->text();
        return $text;
    }

}
