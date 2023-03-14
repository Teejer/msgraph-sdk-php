<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\TermStores\Item\Sets\Item\Children\Item\Children\Item\Relations\Item\Set;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SetRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var SetRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SetRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new setRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SetRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): SetRequestBuilderGetQueryParameters {
        return new SetRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new setRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SetRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SetRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
