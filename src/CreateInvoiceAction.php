<?php

namespace App;

class CreateInvoiceAction
{
    private $createInvoiceLineAction;

    public function __construct(
        CreateInvoiceLineAction $createInvoiceLineAction
    ) {
        $vatCalculator = new VatCalculator();
        $this->createInvoiceLineAction = new CreateInvoiceLineAction($vatCalculator);
    }

    public function __invoke(InvoiceData $invoiceData): Invoice
    {
        $invoice = new Invoice();
        foreach ($invoiceData->lines as $lineData) {
            $invoice->addLine(
                ($this->createInvoiceLineAction)($lineData)
            );
        }
        return $invoice;
    }
}