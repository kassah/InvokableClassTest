<?php

namespace App;

class Usage
{
    public function test() {
        $vatService = new VatCalculator();
        $data = new InvoiceLineData();
        (new CreateInvoiceLineAction($vatService))->execute($data);
        (new CreateInvoiceLineAction($vatService))($data);
    }
}