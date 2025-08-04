<?php

namespace App\Domain\Interfaces\Entities;
/**
 * Interfaz que define el contrato para la generación de PDFs de pedidos.
 */
interface OrderPDFGeneratorInterface
{
    /**
     * Genera el documento PDF completo.
     *
     * @return void
     */
    public function generate();
}

