<?php

namespace Indicio\WHMCS\Api\Processor;

/**
 * Local processor utilizes WHMCS built-in localAPI function to execute requests
 * Hence it can be used only inside the WHMCS eco-system
 *
 */
class LocalProcessorStrategy implements ApiProcessorInterface
{
    public function __construct()
    {
        if(! function_exists('localAPI')) {
            throw new \LogicException('Local Processor can not be used outside of the WHMCS ecosystem');
        }
    }

    /**
     * @param $command
     * @param array $data
     * @param string $adminUsername
     *
     * @return array|null
     */
    public function request($command, $data = [], $adminUsername = '')
    {
        if(function_exists('localAPI_Legacy')) {
            return localAPI_Legacy($command, $data, $adminUsername);
        }

        return localAPI($command, $data, $adminUsername);
    }
}
