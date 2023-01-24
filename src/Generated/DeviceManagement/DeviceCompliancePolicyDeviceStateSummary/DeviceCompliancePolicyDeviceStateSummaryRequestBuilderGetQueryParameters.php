<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicyDeviceStateSummary;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The device compliance state summary for this account.
*/
class DeviceCompliancePolicyDeviceStateSummaryRequestBuilderGetQueryParameters 
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
