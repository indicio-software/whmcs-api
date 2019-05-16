<?php

namespace Indicio\WHMCS\Api\Model\Invoice;

use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;
use Indicio\WHMCS\Api\Model\ApiModelInterface;


/**
 * @Serializer\VirtualProperty("itemdescription1", exp="object.getItemDescription(1)", options={@Serializer\SkipWhenEmpty()})
 * @Serializer\VirtualProperty("itemamount1", exp="object.getItemAmount(1)", options={@Serializer\SkipWhenEmpty()})
 * @Serializer\VirtualProperty("itemtaxed1", exp="object.getItemTaxed(1)", options={@Serializer\SkipWhenEmpty()})
 * @Serializer\VirtualProperty("itemdescription2", exp="object.getItemDescription(2)", options={@Serializer\SkipWhenEmpty()})
 * @Serializer\VirtualProperty("itemamount2", exp="object.getItemAmount(2)", options={@Serializer\SkipWhenEmpty()})
 * @Serializer\VirtualProperty("itemtaxed2", exp="object.getItemTaxed(2)", options={@Serializer\SkipWhenEmpty()})
 * @Serializer\VirtualProperty("itemdescription3", exp="object.getItemDescription(3)", options={@Serializer\SkipWhenEmpty()})
 * @Serializer\VirtualProperty("itemamount3", exp="object.getItemAmount(3)", options={@Serializer\SkipWhenEmpty()})
 * @Serializer\VirtualProperty("itemtaxed3", exp="object.getItemTaxed(3)", options={@Serializer\SkipWhenEmpty()})
 */
class CreateInvoice implements ApiModelInterface
{
    /**
     * @var string
     *
     * @Serializer\Expose()
     */
    protected $username = 'admin';

    /**
     * @var string
     *
     * @Serializer\Expose()
     */
    protected $password = 'admin';

    /**
     * @var int
     *
     * @Serializer\Expose()
     * @Serializer\SerializedName("userid")
     *
     * @Assert\NotBlank()
     */
    protected $clientId;

    /**
     * @var string
     *
     * @Serializer\SerializedName("status")
     *
     * @Assert\NotBlank()
     * @Assert\Expression("this.getStatus() in ['Paid', 'Unpaid', 'Pending']")
     */
    protected $status = 'Unpaid';

    /**
     * @var bool
     *
     * @Serializer\Expose()
     */
    protected $draft = false;

    /**
     * @var bool
     *
     * @Serializer\Expose()
     * @Serializer\SerializedName("sendinvoice")
     */
    protected $sendInvoice = true;

    /**
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\SerializedName("paymentmethod")
     *
     */
    protected $paymentMethod;

    /**
     * @var float
     *
     * @Serializer\Expose()
     * @Serializer\SkipWhenEmpty()
     *
     */
    protected $taxRate;

    /**
     * @var float
     *
     * @Serializer\Expose()
     * @Serializer\SkipWhenEmpty()
     */
    protected $taxRate2;

    /**
     * @var \DateTimeInterface
     *
     * @Serializer\Expose()
     * @Serializer\SkipWhenEmpty()
     */
    protected $date;

    /**
     * @var \DateTimeInterface
     *
     * @Serializer\Expose()
     * @Serializer\SerializedName("duedate")
     * @Serializer\SkipWhenEmpty()
     */
    protected $dueDate;

    /**
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\SkipWhenEmpty()
     */
    protected $notes;

    /**
     * @var array
     *
     * @Serializer\Exclude()
     */
    protected $items = [];

    /**
     * @var bool
     *
     * @Serializer\SerializedName("autoapplycredit")
     * @Serializer\Expose()
     * @Serializer\SkipWhenEmpty()
     */
    protected $autoApplyCredit;

    /**
     * @return string
     */
    public function getActionName()
    {
        return 'CreateInvoice';
    }

    /**
     * @param string $action
     * @return CreateInvoice
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return CreateInvoice
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param int $clientId
     * @return CreateInvoice
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return CreateInvoice
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return CreateInvoice
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDraft()
    {
        return $this->draft;
    }

    /**
     * @param bool $draft
     * @return CreateInvoice
     */
    public function setDraft($draft)
    {
        $this->draft = $draft;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSendInvoice()
    {
        return $this->sendInvoice;
    }

    /**
     * @param bool $sendInvoice
     * @return CreateInvoice
     */
    public function setSendInvoice($sendInvoice)
    {
        $this->sendInvoice = $sendInvoice;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     * @return CreateInvoice
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @param float $taxRate
     * @return CreateInvoice
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate2()
    {
        return $this->taxRate2;
    }

    /**
     * @param float $taxRate2
     * @return CreateInvoice
     */
    public function setTaxRate2($taxRate2)
    {
        $this->taxRate2 = $taxRate2;

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
     * @return CreateInvoice
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param \DateTimeInterface $dueDate
     * @return CreateInvoice
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     * @return CreateInvoice
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAutoApplyCredit()
    {
        return $this->autoApplyCredit;
    }

    /**
     * @param bool $autoApplyCredit
     * @return CreateInvoice
     */
    public function setAutoApplyCredit($autoApplyCredit)
    {
        $this->autoApplyCredit = $autoApplyCredit;

        return $this;
    }

    /**
     * @param InvoiceItem $item
     */
    public function addItem($item)
    {
        if(! $item instanceof InvoiceItem) {
            throw new \InvalidArgumentException('Item must be instance of InvoiceItem');
        }

        $this->items[] = $item;

        return $this;
    }

    /**
     * @param int $itemIndex
     *
     * @return InvoiceItem|null
     */
    protected function getItem($itemIndex)
    {
        if(! isset($this->items[$itemIndex - 1])) {
            return null;
        }

        return $this->items[$itemIndex - 1];
    }

    /**
     * @param int $itemIndex
     *
     * @return string|null
     */
    public function getItemDescription($itemIndex)
    {
        $item = $this->getItem($itemIndex);

        if(null === $item) { return null; }

        return $item->getDescription();
    }

    /**
     * @param int $itemIndex
     *
     * @return float|null
     */
    public function getItemAmount($itemIndex)
    {
        $item = $this->getItem($itemIndex);

        if(null === $item) { return null; }

        return $item->getAmount();
    }

    /**
     * @param int $itemIndex
     *
     * @return float|null
     */
    public function getItemTaxed($itemIndex)
    {
        $item = $this->getItem($itemIndex);

        if(null === $item) { return null; }

        return $item->getTaxed();
    }
}
