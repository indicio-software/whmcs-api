<?php

namespace Indicio\WHMCS\Api\Processor;

interface ApiProcessorInterface
{
    /**
     * @param $command
     * @param array $data
     * @param string $adminUsername
     *
     * @return array|null
     */
    public function request($command, $data = [], $adminUsername = '');
}
