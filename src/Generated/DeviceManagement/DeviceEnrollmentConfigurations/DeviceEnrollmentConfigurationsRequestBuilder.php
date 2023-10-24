<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceEnrollmentConfigurations;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\DeviceManagement\DeviceEnrollmentConfigurations\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceEnrollmentConfigurations\Item\DeviceEnrollmentConfigurationItemRequestBuilder;
use Microsoft\Graph\Generated\Models\DeviceEnrollmentConfiguration;
use Microsoft\Graph\Generated\Models\DeviceEnrollmentConfigurationCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceEnrollmentConfigurations property of the microsoft.graph.deviceManagement entity.
*/
class DeviceEnrollmentConfigurationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceEnrollmentConfigurations property of the microsoft.graph.deviceManagement entity.
     * @param string $deviceEnrollmentConfigurationId The unique identifier of deviceEnrollmentConfiguration
     * @return DeviceEnrollmentConfigurationItemRequestBuilder
    */
    public function byDeviceEnrollmentConfigurationId(string $deviceEnrollmentConfigurationId): DeviceEnrollmentConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceEnrollmentConfiguration%2Did'] = $deviceEnrollmentConfigurationId;
        return new DeviceEnrollmentConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceEnrollmentConfigurationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceEnrollmentConfigurations{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the deviceEnrollmentConfiguration objects.
     * @param DeviceEnrollmentConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceEnrollmentConfigurationCollectionResponse|null>
     * @link https://learn.microsoft.com/graph/api/intune-onboarding-deviceenrollmentconfiguration-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?DeviceEnrollmentConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceEnrollmentConfigurationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create a new deviceEnrollmentWindowsHelloForBusinessConfiguration object.
     * @param DeviceEnrollmentConfiguration $body The request body
     * @param DeviceEnrollmentConfigurationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceEnrollmentConfiguration|null>
     * @link https://learn.microsoft.com/graph/api/intune-onboarding-deviceenrollmentwindowshelloforbusinessconfiguration-create?view=graph-rest-1.0 Find more info here
    */
    public function post(DeviceEnrollmentConfiguration $body, ?DeviceEnrollmentConfigurationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceEnrollmentConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * List properties and relationships of the deviceEnrollmentConfiguration objects.
     * @param DeviceEnrollmentConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceEnrollmentConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create a new deviceEnrollmentWindowsHelloForBusinessConfiguration object.
     * @param DeviceEnrollmentConfiguration $body The request body
     * @param DeviceEnrollmentConfigurationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceEnrollmentConfiguration $body, ?DeviceEnrollmentConfigurationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return DeviceEnrollmentConfigurationsRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceEnrollmentConfigurationsRequestBuilder {
        return new DeviceEnrollmentConfigurationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
