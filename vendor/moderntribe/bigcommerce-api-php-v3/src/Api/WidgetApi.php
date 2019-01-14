<?php
/**
 * WidgetApi
 *
 * @package  BigCommerce\Api\v3
 */

/**
 * BigCommerce API
 *
 * A Swagger Document for the BigCommmerce v3 API.
 *
 * OpenAPI spec version: 3.0.0b
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Api;

use \BigCommerce\Api\v3\Configuration;
use \BigCommerce\Api\v3\ApiClient;
use \BigCommerce\Api\v3\ApiException;
use \BigCommerce\Api\v3\ObjectSerializer;

class WidgetApi
{

    /**
     * API Client
     *
     * @var \BigCommerce\Api\v3\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BigCommerce\Api\v3\ApiClient $apiClient The api client to use
     */
    public function __construct(\BigCommerce\Api\v3\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
    * Get API client
    *
    * @return \BigCommerce\Api\v3\ApiClient get the API client
    */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
    * Set the API client
    *
    * @param \BigCommerce\Api\v3\ApiClient $apiClient set the API client
    *
    * @return WidgetApi
    */
    public function setApiClient(\BigCommerce\Api\v3\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createWidget
     * Creates a widget.
     *
     *
     * @param \BigCommerce\Api\v3\Model\WidgetPost $widget_body  (required)
     * @param array $params = []
     * @return \BigCommerce\Api\v3\Model\WidgetResponse
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function createWidget($widget_body, array $params = [])
    {
        list($response) = $this->createWidgetWithHttpInfo( $widget_body, $params);
        return $response;
    }


    /**
     * Operation createWidgetWithHttpInfo
     *
     * @see self::createWidget()
     * @param \BigCommerce\Api\v3\Model\WidgetPost $widget_body  (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\v3\Model\WidgetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWidgetWithHttpInfo( $widget_body, array $params = [])
    {
        
        // verify the required parameter 'widget_body' is set
        if (!isset($widget_body)) {
            throw new \InvalidArgumentException('Missing the required parameter $widget_body when calling createWidget');
        }
        

        // parse inputs
        $resourcePath = "/content/widgets";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($widget_body)) {
        $_tempBody = $widget_body;
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\WidgetResponse',
                '/content/widgets'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\WidgetResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\WidgetResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 422:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation deleteWidget
     * Deletes a widget.
     *
     *
     * @param string $uuid The identifier for a specific widget. (required)
     * @param array $params = []
     * @return null
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function deleteWidget($uuid, array $params = [])
    {
        list($response) = $this->deleteWidgetWithHttpInfo($uuid, $params);
        return $response;
    }


    /**
     * Operation deleteWidgetWithHttpInfo
     *
     * @see self::deleteWidget()
     * @param string $uuid The identifier for a specific widget. (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWidgetWithHttpInfo($uuid, array $params = [])
    {
        
        // verify the required parameter 'uuid' is set
        if (!isset($uuid)) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling deleteWidget');
        }
        

        // parse inputs
        $resourcePath = "/content/widgets/{uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // path params


        if (isset($uuid)) {
            $resourcePath = str_replace(
                "{" . "uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($uuid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/content/widgets/{uuid}'
            );
            return [null, $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 404:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 422:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation getWidget
     * Gets a widget.
     *
     *
     * @param string $uuid The identifier for a specific widget. (required)
     * @param array $params = []
     * @return \BigCommerce\Api\v3\Model\WidgetResponse
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function getWidget($uuid, array $params = [])
    {
        list($response) = $this->getWidgetWithHttpInfo($uuid, $params);
        return $response;
    }


    /**
     * Operation getWidgetWithHttpInfo
     *
     * @see self::getWidget()
     * @param string $uuid The identifier for a specific widget. (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\v3\Model\WidgetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWidgetWithHttpInfo($uuid, array $params = [])
    {
        
        // verify the required parameter 'uuid' is set
        if (!isset($uuid)) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling getWidget');
        }
        

        // parse inputs
        $resourcePath = "/content/widgets/{uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // path params


        if (isset($uuid)) {
            $resourcePath = str_replace(
                "{" . "uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($uuid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\WidgetResponse',
                '/content/widgets/{uuid}'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\WidgetResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\WidgetResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 404:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 422:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation getWidgets
     * Gets all widgets.
     *
     *
     * @param array $params = []
     *     - page int Specifies the page number in a limited (paginated) list of products. (optional)
     *     - limit int Controls the number of items per page in a limited (paginated) list of products. (optional)
     *     - widget_template_kind string The kind of widget template. (optional)
     *     - widget_template_uuid string The identifier for a specific widget template. (optional)
     * @return \BigCommerce\Api\v3\Model\WidgetsResponse
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function getWidgets(array $params = [])
    {
        list($response) = $this->getWidgetsWithHttpInfo($params);
        return $response;
    }


    /**
     * Operation getWidgetsWithHttpInfo
     *
     * @see self::getWidgets()
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\v3\Model\WidgetsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWidgetsWithHttpInfo(array $params = [])
    {
        

        // parse inputs
        $resourcePath = "/content/widgets";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\WidgetsResponse',
                '/content/widgets'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\WidgetsResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\WidgetsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 422:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation searchWidgets
     * Gets all widgets by search.
     *
     *
     * @param array $params = []
     *     - page int Specifies the page number in a limited (paginated) list of products. (optional)
     *     - limit int Controls the number of items per page in a limited (paginated) list of products. (optional)
     *     - query string The query string associated with a widget&#39;s name and description. (optional)
     * @return \BigCommerce\Api\v3\Model\WidgetsResponse
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function searchWidgets(array $params = [])
    {
        list($response) = $this->searchWidgetsWithHttpInfo($params);
        return $response;
    }


    /**
     * Operation searchWidgetsWithHttpInfo
     *
     * @see self::searchWidgets()
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\v3\Model\WidgetsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchWidgetsWithHttpInfo(array $params = [])
    {
        

        // parse inputs
        $resourcePath = "/content/widgets/search";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\WidgetsResponse',
                '/content/widgets/search'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\WidgetsResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\WidgetsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 422:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation updateWidget
     * Updates a widget.
     *
     *
     * @param string $uuid The identifier for a specific widget. (required)
     * @param \BigCommerce\Api\v3\Model\WidgetPut $widget_body  (required)
     * @param array $params = []
     * @return \BigCommerce\Api\v3\Model\WidgetResponse
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function updateWidget($uuid, $widget_body, array $params = [])
    {
        list($response) = $this->updateWidgetWithHttpInfo($uuid,  $widget_body, $params);
        return $response;
    }


    /**
     * Operation updateWidgetWithHttpInfo
     *
     * @see self::updateWidget()
     * @param string $uuid The identifier for a specific widget. (required)
     * @param \BigCommerce\Api\v3\Model\WidgetPut $widget_body  (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\v3\Model\WidgetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWidgetWithHttpInfo($uuid,  $widget_body, array $params = [])
    {
        
        // verify the required parameter 'uuid' is set
        if (!isset($uuid)) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling updateWidget');
        }
        
        // verify the required parameter 'widget_body' is set
        if (!isset($widget_body)) {
            throw new \InvalidArgumentException('Missing the required parameter $widget_body when calling updateWidget');
        }
        

        // parse inputs
        $resourcePath = "/content/widgets/{uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // path params


        if (isset($uuid)) {
            $resourcePath = str_replace(
                "{" . "uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($uuid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($widget_body)) {
        $_tempBody = $widget_body;
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\WidgetResponse',
                '/content/widgets/{uuid}'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\WidgetResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\WidgetResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 404:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                case 422:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
}
