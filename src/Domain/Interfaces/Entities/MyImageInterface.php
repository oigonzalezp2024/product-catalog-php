<?php

namespace App\Domain\Interfaces\Entities;

interface MyImageInterface
{
    function getSrc();
    function getAlt();
    function getWidth();
    function getHeight();
}
