<?php

namespace Microsoft\Graph\Generated\Policies\AuthenticationFlowsPolicy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuthenticationFlowsPolicyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AuthenticationFlowsPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuthenticationFlowsPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new authenticationFlowsPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuthenticationFlowsPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthenticationFlowsPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new authenticationFlowsPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuthenticationFlowsPolicyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuthenticationFlowsPolicyRequestBuilderGetQueryParameters {
        return new AuthenticationFlowsPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

}
