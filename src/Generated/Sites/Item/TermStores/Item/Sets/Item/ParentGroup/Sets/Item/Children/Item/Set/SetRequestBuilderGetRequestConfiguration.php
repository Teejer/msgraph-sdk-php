<?php

namespace Microsoft\Graph\Generated\Sites\Item\TermStores\Item\Sets\Item\ParentGroup\Sets\Item\Children\Item\Set;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SetRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SetRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SetRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new setRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SetRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SetRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new setRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SetRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SetRequestBuilderGetQueryParameters {
        return new SetRequestBuilderGetQueryParameters($expand, $select);
    }

}
