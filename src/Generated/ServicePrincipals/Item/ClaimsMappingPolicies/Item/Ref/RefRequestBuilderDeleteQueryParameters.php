<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\ClaimsMappingPolicies\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove a claimsMappingPolicy from a servicePrincipal.
*/
class RefRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("%40id")
     * @var string|null $id Delete Uri
    */
    public ?string $id = null;
    
    /**
     * Instantiates a new RefRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $id Delete Uri
    */
    public function __construct(?string $id = null) {
        $this->id = $id;
    }

}
