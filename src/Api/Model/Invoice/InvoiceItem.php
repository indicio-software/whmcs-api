<?php

namespace Indicio\WHMCS\Api\Model\Invoice;

final class InvoiceItem
{
    /**
     * @var string
     */
    protected $description;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var float
     */
    protected $taxed;

    public function __construct($description = 'No Description', $amount = 0.0, $taxed = 0.0)
    {
        $this->description = $description;
        $this->amount = $amount;
        $this->taxed = $taxed;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getTaxed()
    {
        return $this->taxed;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}
