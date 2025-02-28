<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphMicrosoftStoreForBusinessApp;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the item of type microsoft.graph.mobileApp as microsoft.graph.microsoftStoreForBusinessApp
*/
class GraphMicrosoftStoreForBusinessAppRequestBuilderGetQueryParameters 
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
     * Instantiates a new graphMicrosoftStoreForBusinessAppRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
