<?php

namespace Microsoft\Graph\Generated\Groups\Item\Events;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EventsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EventsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EventsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new eventsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EventsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EventsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new eventsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return EventsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?array $select = null, ?int $skip = null, ?int $top = null): EventsRequestBuilderGetQueryParameters {
        return new EventsRequestBuilderGetQueryParameters($count, $filter, $orderby, $select, $skip, $top);
    }

}
