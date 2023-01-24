<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleEligibilityScheduleRequests\Item\Principal;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrincipalRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var PrincipalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrincipalRequestBuilderGetQueryParameters $queryParameters = null;
    
}
