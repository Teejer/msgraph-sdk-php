<?php

namespace Microsoft\Graph\Generated\InformationProtection;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get informationProtection
*/
class InformationProtectionRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
