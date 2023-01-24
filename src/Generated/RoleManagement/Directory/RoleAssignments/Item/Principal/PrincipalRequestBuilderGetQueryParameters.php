<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignments\Item\Principal;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Referencing the assigned principal. Read-only. Supports $expand.
*/
class PrincipalRequestBuilderGetQueryParameters 
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
