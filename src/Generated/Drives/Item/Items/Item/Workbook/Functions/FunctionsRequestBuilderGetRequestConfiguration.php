<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FunctionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FunctionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FunctionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new functionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FunctionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FunctionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new functionsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FunctionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FunctionsRequestBuilderGetQueryParameters {
        return new FunctionsRequestBuilderGetQueryParameters($expand, $select);
    }

}
