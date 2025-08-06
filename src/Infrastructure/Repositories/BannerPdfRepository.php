<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Interfaces\Repositories\BannerPdfRepositoryInterface;
use App\Domain\Interfaces\Entities\MyImageInterface;
use App\Domain\Entities\BannerPdf;

class BannerPdfRepository implements BannerPdfRepositoryInterface
{
    function findMyImage(): BannerPdf
    {
        $src = '../../../assets/images/banner_pdf.png';
        $alt = 'Logo de Tu Empresa';
        $width = 1200;
        $height = 400;
        return new BannerPdf($src, $alt, $width, $height);
    }
}
