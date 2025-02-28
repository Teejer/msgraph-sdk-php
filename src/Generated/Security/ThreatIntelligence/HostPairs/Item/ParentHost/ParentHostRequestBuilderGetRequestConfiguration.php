<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\HostPairs\Item\ParentHost;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ParentHostRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ParentHostRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ParentHostRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new parentHostRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ParentHostRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ParentHostRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new parentHostRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ParentHostRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ParentHostRequestBuilderGetQueryParameters {
        return new ParentHostRequestBuilderGetQueryParameters($expand, $select);
    }

}
