<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Interfaces\Repositories\QrImageRepositoryInterface;
use App\Domain\Entities\QrImage;

class QrImageRepository implements QrImageRepositoryInterface
{
    function findQrImage(){
        $qrs = [];
        $src = '../../../assets/images/qr_nequi.jpeg';
        $alt = 'Código QR para pagar con Nequi';
        $width = 100;
        $height = 100;
        $qrImage = new QrImage(
            $src,
            $alt,
            $width,
            $height
        );
        array_push($qrs, $qrImage);

        $src = '../../../assets/images/qr_nequi.jpeg';
        $alt = 'Código QR para pagar con Nequi';
        $width = 100;
        $height = 100;
        $qrImage = new QrImage(
            $src,
            $alt,
            $width,
            $height
        );
        array_push($qrs, $qrImage);

        $qr_image = [
            [
                'src' => $qrs[0]->getSrc(),
                'alt' => $qrs[0]->getAlt(),
                'width' => $qrs[0]->getWidth(),
                'height' => $qrs[0]->getHeight(),
            ],
            [
                'src' => $qrs[1]->getSrc(),
                'alt' => $qrs[1]->getAlt(),
                'width' => $qrs[1]->getWidth(),
                'height' => $qrs[1]->getHeight(),
            ]
        ];
        return $qr_image;
    }
}
