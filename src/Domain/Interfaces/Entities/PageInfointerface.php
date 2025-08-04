<?php

namespace App\Domain\Interfaces\Entities;

interface PageInfointerface
{
    function getTitle();
    function getDescription();
    function getKeywords();
    function getBanner();
    function getBannerPdf();
    function getCompany();
}
