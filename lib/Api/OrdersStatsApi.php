<?php
/**
 * OrdersStatsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace YandexMarketApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use YandexMarketApi\ApiException;
use YandexMarketApi\Configuration;
use YandexMarketApi\HeaderSelector;
use YandexMarketApi\ObjectSerializer;

/**
 * OrdersStatsApi Class Doc Comment
 *
 * @category Class
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrdersStatsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getOrdersStats' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getOrdersStats
     *
     * Детальная информация по заказам
     *
     * @param  int $campaign_id Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) (required)
     * @param  string $page_token Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60;, параметры &#x60;offset&#x60;, &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются. (optional)
     * @param  int $limit Количество товаров на одной странице. (optional)
     * @param  \YandexMarketApi\Model\GetOrdersStatsRequest $get_orders_stats_request get_orders_stats_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrdersStats'] to see the possible values for this operation
     *
     * @throws \YandexMarketApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \YandexMarketApi\Model\GetOrdersStatsResponse|\YandexMarketApi\Model\ApiClientDataErrorResponse|\YandexMarketApi\Model\ApiUnauthorizedErrorResponse|\YandexMarketApi\Model\ApiForbiddenErrorResponse|\YandexMarketApi\Model\ApiNotFoundErrorResponse|\YandexMarketApi\Model\ApiLimitErrorResponse|\YandexMarketApi\Model\ApiServerErrorResponse
     */
    public function getOrdersStats($campaign_id, $page_token = null, $limit = null, $get_orders_stats_request = null, string $contentType = self::contentTypes['getOrdersStats'][0])
    {
        list($response) = $this->getOrdersStatsWithHttpInfo($campaign_id, $page_token, $limit, $get_orders_stats_request, $contentType);
        return $response;
    }

    /**
     * Operation getOrdersStatsWithHttpInfo
     *
     * Детальная информация по заказам
     *
     * @param  int $campaign_id Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) (required)
     * @param  string $page_token Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60;, параметры &#x60;offset&#x60;, &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются. (optional)
     * @param  int $limit Количество товаров на одной странице. (optional)
     * @param  \YandexMarketApi\Model\GetOrdersStatsRequest $get_orders_stats_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrdersStats'] to see the possible values for this operation
     *
     * @throws \YandexMarketApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \YandexMarketApi\Model\GetOrdersStatsResponse|\YandexMarketApi\Model\ApiClientDataErrorResponse|\YandexMarketApi\Model\ApiUnauthorizedErrorResponse|\YandexMarketApi\Model\ApiForbiddenErrorResponse|\YandexMarketApi\Model\ApiNotFoundErrorResponse|\YandexMarketApi\Model\ApiLimitErrorResponse|\YandexMarketApi\Model\ApiServerErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrdersStatsWithHttpInfo($campaign_id, $page_token = null, $limit = null, $get_orders_stats_request = null, string $contentType = self::contentTypes['getOrdersStats'][0])
    {
        $request = $this->getOrdersStatsRequest($campaign_id, $page_token, $limit, $get_orders_stats_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\YandexMarketApi\Model\GetOrdersStatsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\YandexMarketApi\Model\GetOrdersStatsResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YandexMarketApi\Model\GetOrdersStatsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\YandexMarketApi\Model\ApiClientDataErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\YandexMarketApi\Model\ApiClientDataErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YandexMarketApi\Model\ApiClientDataErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\YandexMarketApi\Model\ApiUnauthorizedErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\YandexMarketApi\Model\ApiUnauthorizedErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YandexMarketApi\Model\ApiUnauthorizedErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\YandexMarketApi\Model\ApiForbiddenErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\YandexMarketApi\Model\ApiForbiddenErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YandexMarketApi\Model\ApiForbiddenErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\YandexMarketApi\Model\ApiNotFoundErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\YandexMarketApi\Model\ApiNotFoundErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YandexMarketApi\Model\ApiNotFoundErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 420:
                    if ('\YandexMarketApi\Model\ApiLimitErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\YandexMarketApi\Model\ApiLimitErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YandexMarketApi\Model\ApiLimitErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\YandexMarketApi\Model\ApiServerErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\YandexMarketApi\Model\ApiServerErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YandexMarketApi\Model\ApiServerErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\YandexMarketApi\Model\GetOrdersStatsResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YandexMarketApi\Model\GetOrdersStatsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YandexMarketApi\Model\ApiClientDataErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YandexMarketApi\Model\ApiUnauthorizedErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YandexMarketApi\Model\ApiForbiddenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YandexMarketApi\Model\ApiNotFoundErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 420:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YandexMarketApi\Model\ApiLimitErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YandexMarketApi\Model\ApiServerErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOrdersStatsAsync
     *
     * Детальная информация по заказам
     *
     * @param  int $campaign_id Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) (required)
     * @param  string $page_token Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60;, параметры &#x60;offset&#x60;, &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются. (optional)
     * @param  int $limit Количество товаров на одной странице. (optional)
     * @param  \YandexMarketApi\Model\GetOrdersStatsRequest $get_orders_stats_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrdersStats'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrdersStatsAsync($campaign_id, $page_token = null, $limit = null, $get_orders_stats_request = null, string $contentType = self::contentTypes['getOrdersStats'][0])
    {
        return $this->getOrdersStatsAsyncWithHttpInfo($campaign_id, $page_token, $limit, $get_orders_stats_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrdersStatsAsyncWithHttpInfo
     *
     * Детальная информация по заказам
     *
     * @param  int $campaign_id Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) (required)
     * @param  string $page_token Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60;, параметры &#x60;offset&#x60;, &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются. (optional)
     * @param  int $limit Количество товаров на одной странице. (optional)
     * @param  \YandexMarketApi\Model\GetOrdersStatsRequest $get_orders_stats_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrdersStats'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrdersStatsAsyncWithHttpInfo($campaign_id, $page_token = null, $limit = null, $get_orders_stats_request = null, string $contentType = self::contentTypes['getOrdersStats'][0])
    {
        $returnType = '\YandexMarketApi\Model\GetOrdersStatsResponse';
        $request = $this->getOrdersStatsRequest($campaign_id, $page_token, $limit, $get_orders_stats_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getOrdersStats'
     *
     * @param  int $campaign_id Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) (required)
     * @param  string $page_token Идентификатор страницы c результатами.  Если параметр не указан, возвращается самая старая страница.  Рекомендуется передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60;, параметры &#x60;offset&#x60;, &#x60;page_number&#x60; и &#x60;page_size&#x60; игнорируются. (optional)
     * @param  int $limit Количество товаров на одной странице. (optional)
     * @param  \YandexMarketApi\Model\GetOrdersStatsRequest $get_orders_stats_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOrdersStats'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getOrdersStatsRequest($campaign_id, $page_token = null, $limit = null, $get_orders_stats_request = null, string $contentType = self::contentTypes['getOrdersStats'][0])
    {

        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling getOrdersStats'
            );
        }





        $resourcePath = '/campaigns/{campaignId}/stats/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_token,
            'page_token', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);


        // path params
        if ($campaign_id !== null) {
            $resourcePath = str_replace(
                '{' . 'campaignId' . '}',
                ObjectSerializer::toPathValue($campaign_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($get_orders_stats_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($get_orders_stats_request));
            } else {
                $httpBody = $get_orders_stats_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
