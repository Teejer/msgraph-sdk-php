<?php

namespace Microsoft\Graph\Generated\Branding\Localizations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Add different branding based on a locale.
*/
class OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters 
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
