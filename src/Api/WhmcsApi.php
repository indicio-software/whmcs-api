<?php

namespace Indicio\WHMCS\Api;

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Indicio\WHMCS\Api\Model\ApiModelInterface;
use Indicio\WHMCS\Api\Processor\ApiProcessorInterface;

class WhmcsApi implements WhmcsApiInterface
{
    /**
     * @var ValidatorInterface
     */
    protected $validator;

    /**
     * @var SerializerInterface|Serializer
     */
    protected $serializer;

    /**
     * @var ApiProcessorInterface
     */
    protected $processor;

    public function __construct(ValidatorInterface $validator, SerializerInterface $serializer)
    {
        $this->validator = $validator;
        $this->serializer = $serializer;
    }

    public function setProcessor(ApiProcessorInterface $processor)
    {
        $this->processor = $processor;

        return $this;
    }

    public function getProcessor()
    {
        if(! $this->processor) {
            throw new \LogicException('You must to set the API processor (Local/HTTP) before using the API');
        }

        return $this->processor;
    }

    public function request(ApiModelInterface $apiModel)
    {
        $validation = $this->validator->validate($apiModel);

        if(0 !== $validation->count()) {
            throw new \Exception((string) $validation);
        }

        $command = $apiModel->getActionName();
        $payload = $this->serializer->toArray($apiModel);

        return $this->getProcessor()->request($command, $payload);
    }
}
