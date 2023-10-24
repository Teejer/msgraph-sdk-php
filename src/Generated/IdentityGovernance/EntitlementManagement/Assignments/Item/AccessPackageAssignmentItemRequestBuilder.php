<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Assignments\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Assignments\Item\AccessPackage\AccessPackageRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Assignments\Item\AssignmentPolicy\AssignmentPolicyRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Assignments\Item\Reprocess\ReprocessRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Assignments\Item\Target\TargetRequestBuilder;
use Microsoft\Graph\Generated\Models\AccessPackageAssignment;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignments property of the microsoft.graph.entitlementManagement entity.
*/
class AccessPackageAssignmentItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the accessPackage property of the microsoft.graph.accessPackageAssignment entity.
    */
    public function accessPackage(): AccessPackageRequestBuilder {
        return new AccessPackageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignmentPolicy property of the microsoft.graph.accessPackageAssignment entity.
    */
    public function assignmentPolicy(): AssignmentPolicyRequestBuilder {
        return new AssignmentPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reprocess method.
    */
    public function reprocess(): ReprocessRequestBuilder {
        return new ReprocessRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the target property of the microsoft.graph.accessPackageAssignment entity.
    */
    public function target(): TargetRequestBuilder {
        return new TargetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AccessPackageAssignmentItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/assignments/{accessPackageAssignment%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property assignments for identityGovernance
     * @param AccessPackageAssignmentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
    */
    public function delete(?AccessPackageAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * In Microsoft Entra entitlement management, retrieve the properties and relationships of an accessPackageAssignment object. This API is available in the following national cloud deployments.
     * @param AccessPackageAssignmentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageAssignment|null>
     * @link https://learn.microsoft.com/graph/api/accesspackageassignment-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?AccessPackageAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property assignments in identityGovernance
     * @param AccessPackageAssignment $body The request body
     * @param AccessPackageAssignmentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageAssignment|null>
    */
    public function patch(AccessPackageAssignment $body, ?AccessPackageAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property assignments for identityGovernance
     * @param AccessPackageAssignmentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AccessPackageAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, application/json");
        return $requestInfo;
    }

    /**
     * In Microsoft Entra entitlement management, retrieve the properties and relationships of an accessPackageAssignment object. This API is available in the following national cloud deployments.
     * @param AccessPackageAssignmentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AccessPackageAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property assignments in identityGovernance
     * @param AccessPackageAssignment $body The request body
     * @param AccessPackageAssignmentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AccessPackageAssignment $body, ?AccessPackageAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return AccessPackageAssignmentItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AccessPackageAssignmentItemRequestBuilder {
        return new AccessPackageAssignmentItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
