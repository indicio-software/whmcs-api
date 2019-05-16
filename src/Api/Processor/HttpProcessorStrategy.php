<?php

namespace Indicio\WHMCS\Api\Processor;

class HttpProcessorStrategy implements ApiProcessorInterface
{
    public function request($command, $data = [], $adminUsername = '')
    {
        throw new \Exception('Not implemented yet');
    }
}
