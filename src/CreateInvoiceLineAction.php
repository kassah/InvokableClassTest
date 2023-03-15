<?php

namespace App;

class CreateInvoiceLineAction
{
    private $vatCalculator;

    public function __construct(VatCalculator $vatCalculator)
    {
        $this->vatCalculator = $vatCalculator;
    }

    public function execute(
        InvoiceLineData $invoiceLineData
    ): InvoiceLine {
        return new InvoiceLine();
    }

    public function __invoke(
        InvoiceLineData $invoiceLineData
    ): InvoiceLine {
        return new InvoiceLine();
    }
}