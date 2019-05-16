<?php

namespace Indicio\WHMCS\Api\Model\Response;

use JMS\Serializer\Annotation as Serializer;

class StandardResponse
{
    /**
     * @var string
     *
     * @Serializer\Expose()
     */
    protected $result;
}
