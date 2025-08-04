<?php

namespace App\Infrastructure\Adapter;

// Datos generales de la página y el banner de la empresa
use App\Domain\Interfaces\Entities\PageInfointerface;
use App\Domain\Interfaces\Repositories\MyImageRepositoryInterface;
use App\Domain\Interfaces\Repositories\BannerPdfRepositoryInterface;
use App\Domain\Interfaces\Repositories\CompanyRepositoryInterface;
use App\Domain\Entities\PageInfo;

class WebAdapter{
    private MyImageRepositoryInterface $myImageRepository;
    private BannerPdfRepositoryInterface $bannerPdfRepository;
    private CompanyRepositoryInterface $companyRepository;
    private $page_info;

    public function __construct(
        MyImageRepositoryInterface $myImageRepository,
        BannerPdfRepositoryInterface $bannerPdfRepository,
        CompanyRepositoryInterface $companyRepository
        ) {
        $this->myImageRepository = $myImageRepository;
        $this->bannerPdfRepository = $bannerPdfRepository;
        $this->companyRepository = $companyRepository;
    }

    private function run()
    {
        $image = $this->myImageRepository->findMyImage();
        $image_pdf = $this->bannerPdfRepository->findMyImage();
        $myCompany = $this->companyRepository->findMyCompany();

        $banner = [
            'src' => $image->getSrc(),
            'alt' => $image->getAlt(),
            'width' => $image->getWidth(),
            'height' => $image->getHeight(),
        ];

        $banner_pdf = [
            'src' => $image_pdf->getSrc(),
            'alt' => $image_pdf->getAlt(),
            'width' => $image_pdf->getWidth(),
            'height' => $image_pdf->getHeight(),
        ];

        $company = [
            'name' => $myCompany->getName(),
            'address' => $myCompany->getAddress(),
            'phone' => $myCompany->getPhone(),
            'website' => $myCompany->getWebsite(),
            'email' => $myCompany->getEmail(),
        ];

        $title = 'Resumen de Pedido - Tu Empresa';
        $description = 'Revisa los detalles de tu pedido y completa tu pago.';
        $keywords = 'pedido, pago, resumen, compra, tuempresa';
        $page = new PageInfo(
            $title,
            $description,
            $keywords,
            $banner,
            $banner_pdf,
            $company
        );

        // Datos generales de la página y el banner de la empresa
        $this->page_info = [
            'title' => $page->getTitle(),
            'description' => $page->getDescription(),
            'keywords' => $page->getKeywords(),
            'banner' => $page->getBanner(),
            'banner_pdf' => $page->getBannerPdf(),
            'company' => $page->getCompany()
        ];        
    }
    public function result()
    {
        $this->run();
        return $this->page_info;
    }
}
