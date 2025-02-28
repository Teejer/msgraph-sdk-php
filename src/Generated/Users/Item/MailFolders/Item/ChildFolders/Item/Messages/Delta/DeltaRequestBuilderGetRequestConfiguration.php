<?php

namespace Microsoft\Graph\Generated\Users\Item\MailFolders\Item\ChildFolders\Item\Messages\Delta;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeltaRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeltaRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeltaRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new deltaRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeltaRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeltaRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new deltaRequestBuilderGetQueryParameters.
     * @param string|null $changeType A custom query option to filter the delta response based on the type of change. Supported values are created, updated or deleted.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return DeltaRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $changeType = null, ?bool $count = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): DeltaRequestBuilderGetQueryParameters {
        return new DeltaRequestBuilderGetQueryParameters($changeType, $count, $filter, $orderby, $search, $select, $skip, $top);
    }

}
