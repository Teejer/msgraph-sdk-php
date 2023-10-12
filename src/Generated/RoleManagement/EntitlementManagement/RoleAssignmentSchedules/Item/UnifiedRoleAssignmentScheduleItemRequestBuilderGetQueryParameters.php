<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleAssignmentSchedules\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the schedule for an active role assignment operation. This API is available in the following national cloud deployments.
*/
class UnifiedRoleAssignmentScheduleItemRequestBuilderGetQueryParameters 
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
    
    /**
     * Instantiates a new UnifiedRoleAssignmentScheduleItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
