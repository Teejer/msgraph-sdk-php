<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Teachers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Education\Classes\Item\Teachers\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Teachers\Item\EducationUserItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Teachers\Ref\RefRequestBuilder;
use Microsoft\Graph\Generated\Models\EducationUserCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the teachers property of the microsoft.graph.educationClass entity.
*/
class TeachersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of educationRoot entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft/Graph/Generated.education.classes.item.teachers.item collection
     * @param string $educationUserId The unique identifier of educationUser
     * @return EducationUserItemRequestBuilder
    */
    public function byEducationUserId(string $educationUserId): EducationUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationUser%2Did'] = $educationUserId;
        return new EducationUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TeachersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/classes/{educationClass%2Did}/teachers{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of teachers for a class. Delegated tokens must be members of the class to get the teacher list.
     * @param TeachersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationUserCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationclass-list-teachers?view=graph-rest-1.0 Find more info here
    */
    public function get(?TeachersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationUserCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of teachers for a class. Delegated tokens must be members of the class to get the teacher list.
     * @param TeachersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TeachersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return TeachersRequestBuilder
    */
    public function withUrl(string $rawUrl): TeachersRequestBuilder {
        return new TeachersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
