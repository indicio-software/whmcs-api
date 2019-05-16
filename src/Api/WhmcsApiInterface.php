<?php

namespace Indicio\WHMCS\Api;

use Indicio\WHMCS\Api\Model\ApiModelInterface;
use Indicio\WHMCS\Api\Processor\ApiProcessorInterface;

interface WhmcsApiInterface
{
    /**
     * @param ApiProcessorInterface $processor
     *
     * @return void
     */
    public function setProcessor(ApiProcessorInterface $processor);

    /**
     * @return ApiProcessorInterface
     */
    public function getProcessor();

    /**
     * @param ApiModelInterface $apiModel
     *
     * @return mixed
     */
    public function request(ApiModelInterface $apiModel);
}
