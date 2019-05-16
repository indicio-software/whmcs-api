<?php

namespace Indicio\WHMCS\Api\Model\Invoice;

use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;
use Indicio\WHMCS\Api\Model\ApiModelInterface;

class AddInvoicePayment implements ApiModelInterface
{
    public function getActionName()
    {
        return 'AddInvoicePayment';
    }

    /**
     * @var int
     *
     * @Serializer\SerializedName("invoiceid")
     *
     * @Assert\NotBlank()
     */
    protected $invoiceId;

    /**
     * @var string
     *
     * @Serializer\SerializedName("transid")
     *
     * @Assert\NotBlank()
     */
    protected $transactionId;

    /**
     * @var string
     *
     * @Serializer\SerializedName("gateway")
     *
     * @Assert\NotBlank()
     */
    protected $gateway;

    /**
     * @var \DateTimeInterface
     *
     * @Serializer\SerializedName("date")
     */
    protected $date;


    /**
     * @var float
     *
     * @Serializer\SerializedName("amount")
     */
    protected $amount;

    /**
     * @var float
     *
     * @Serializer\SerializedName("fees")
     */
    protected $fees;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("noemail")
     */
    protected $noEmail = false;

    /**
     * @return int
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param int $invoiceId
     * @return AddInvoicePayment
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return AddInvoicePayment
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * @param string $gateway
     * @return AddInvoicePayment
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTimeInterface $date
     * @return AddInvoicePayment
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return AddInvoicePayment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * @param float $fees
     * @return AddInvoicePayment
     */
    public function setFees($fees)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNoEmail()
    {
        return $this->noEmail;
    }

    /**
     * @param bool $noEmail
     * @return AddInvoicePayment
     */
    public function setNoEmail($noEmail)
    {
        $this->noEmail = $noEmail;
        return $this;
    }
}
