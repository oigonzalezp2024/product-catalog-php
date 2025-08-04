<?php

namespace App\Domain\Interfaces\Repositories;

use App\Domain\Entities\BannerPdf;

interface BannerPdfRepositoryInterface
{
    function findMyImage():BannerPdf;
}
