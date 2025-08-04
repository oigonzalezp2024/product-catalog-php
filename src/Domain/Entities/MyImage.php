<?php

namespace App\Domain\Entities;

use App\Domain\Interfaces\Entities\MyImageInterface;

class MyImage implements MyImageInterface
{
    private $src;
    private $alt;
    private $width;
    private $height;
    public function __construct(
        string $src,
        string $alt,
        string $width,
        string $height
    ) {
        $this->src = $src;
        $this->alt = $alt;
        $this->width = $width;
        $this->height = $height;
    }
    function getSrc()
    {
        return $this->src;
    }
    function getAlt()
    {
        return $this->alt;
    }
    function getWidth()
    {
        return $this->width;
    }
    function getHeight()
    {
        return $this->height;
    }
}
