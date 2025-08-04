<?php

namespace App\Domain\Entities;

use App\Domain\interfaces\Entities\PageInfointerface;

class PageInfo implements PageInfointerface
{
    private $title;
    private $description;
    private $keywords;
    private $banner;
    private $banner_pdf;
    private $company;

    public function __construct(
        string $title,
        string $description,
        string $keywords,
        array $banner,
        array $banner_pdf,
        array $company
    ) {;
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->banner = $banner;
        $this->banner_pdf = $banner_pdf;
        $this->company = $company;

    }

    function getTitle()
    {
        return $this->title;
    }

    function getDescription()
    {
        return $this->description;
    }
    function getKeywords()
    {
        return $this->keywords;
    }
    function getBanner()
    {
        return $this->banner;
    }
    function getBannerPdf()
    {
        return $this->banner_pdf;
    }
    function getCompany()
    {
        return $this->company;
    }
}
