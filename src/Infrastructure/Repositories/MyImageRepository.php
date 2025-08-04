<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Interfaces\Repositories\MyImageRepositoryInterface;
use App\Domain\Entities\MyImage;

class MyImageRepository implements MyImageRepositoryInterface
{
    function findMyImage(): MyImage
    {
        $src = './assets/images/banner.png';
        $alt = 'Logo de Tu Empresa';
        $width = 1200;
        $height = 400;
        return new MyImage($src, $alt, $width, $height);
    }
}
