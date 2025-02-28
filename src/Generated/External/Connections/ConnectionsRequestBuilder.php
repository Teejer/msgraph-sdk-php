<?php

namespace Microsoft\Graph\Generated\External\Connections;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\External\Connections\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\External\Connections\Item\ExternalConnectionItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ExternalConnectors\ExternalConnection;
use Microsoft\Graph\Generated\Models\ExternalConnectors\ExternalConnectionCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the connections property of the microsoft.graph.externalConnectors.external entity.
*/
class ConnectionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the connections property of the microsoft.graph.externalConnectors.external entity.
     * @param string $externalConnectionId The unique identifier of externalConnection
     * @return ExternalConnectionItemRequestBuilder
    */
    public function byExternalConnectionId(string $externalConnectionId): ExternalConnectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['externalConnection%2Did'] = $externalConnectionId;
        return new ExternalConnectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ConnectionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/external/connections{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the externalConnection objects and their properties.
     * @param ConnectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalConnectionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/externalconnectors-externalconnection-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?ConnectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalConnectionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new externalConnection object.
     * @param ExternalConnection $body The request body
     * @param ConnectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalConnection|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/externalconnectors-external-post-connections?view=graph-rest-1.0 Find more info here
    */
    public function post(ExternalConnection $body, ?ConnectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalConnection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the externalConnection objects and their properties.
     * @param ConnectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConnectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Create a new externalConnection object.
     * @param ExternalConnection $body The request body
     * @param ConnectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ExternalConnection $body, ?ConnectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ConnectionsRequestBuilder
    */
    public function withUrl(string $rawUrl): ConnectionsRequestBuilder {
        return new ConnectionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
