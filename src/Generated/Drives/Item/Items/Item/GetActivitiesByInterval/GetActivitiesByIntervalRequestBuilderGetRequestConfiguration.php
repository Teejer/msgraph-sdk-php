<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\GetActivitiesByInterval;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetActivitiesByIntervalRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetActivitiesByIntervalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetActivitiesByIntervalRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new getActivitiesByIntervalRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetActivitiesByIntervalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetActivitiesByIntervalRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new getActivitiesByIntervalRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetActivitiesByIntervalRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): GetActivitiesByIntervalRequestBuilderGetQueryParameters {
        return new GetActivitiesByIntervalRequestBuilderGetQueryParameters($count, $filter, $orderby, $search, $select, $skip, $top);
    }

}
