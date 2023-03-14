<?php

namespace Microsoft\Graph\Generated\Users\Item\MailFolders\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MailFolderItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var MailFolderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MailFolderItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MailFolderItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return MailFolderItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): MailFolderItemRequestBuilderGetQueryParameters {
        return new MailFolderItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new MailFolderItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MailFolderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MailFolderItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
