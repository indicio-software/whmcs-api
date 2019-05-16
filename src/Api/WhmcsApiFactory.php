<?php

namespace Indicio\WHMCS\Api;

use JMS\Serializer\SerializerBuilder;
use Symfony\Component\Validator\Validation;

class WhmcsApiFactory
{
    public static function build()
    {
        $validator = Validation::createValidatorBuilder()
            ->enableAnnotationMapping()
            ->getValidator();

        $serializer = SerializerBuilder::create();
        $serializer->setAccessorStrategy(new \JMS\Serializer\Accessor\ExpressionAccessorStrategy(
            new \JMS\Serializer\Expression\ExpressionEvaluator(new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()),
            new \JMS\Serializer\Accessor\DefaultAccessorStrategy()
        ));

        $serializer = $serializer->build();

        $api = new WhmcsApi(
            $validator,
            $serializer
        );

        $api->setProcessor(new Processor\LocalProcessorStrategy());

        return $api;
    }
}
