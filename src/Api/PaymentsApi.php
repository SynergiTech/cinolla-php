<?php
/**
 * PaymentsApi
 * PHP version 8.1
 *
 * @package  SynergiTech\Cinolla
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cinolla Client API
 *
 * Welcome to Cinolla Client API documentation for version 3. Please see below for the available API endpoints and their required parameters and responses. If you have any questions, please contact [support@cinolla.com](mailto:support@cinolla.com).
 *
 * The version of the OpenAPI document: 3.0.0
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SynergiTech\Cinolla\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use SynergiTech\Cinolla\ApiException;
use SynergiTech\Cinolla\Configuration;
use SynergiTech\Cinolla\HeaderSelector;
use SynergiTech\Cinolla\ObjectSerializer;

/**
 * PaymentsApi Class Doc Comment
 *
 * @package  SynergiTech\Cinolla
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentsApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'createPayment' => [
            'application/json',
        ],
        'getPayments' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation createPayment
     *
     * Create a new Payment.
     *
     * @param  \SynergiTech\Cinolla\Model\Payment2 $payment2 The JSON Payload. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPayment'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \SynergiTech\Cinolla\Model\Payment
     */
    public function createPayment(
        \SynergiTech\Cinolla\Model\Payment2 $payment2,
        string $contentType = self::contentTypes['createPayment'][0]
    ): \SynergiTech\Cinolla\Model\Payment
    {
        list($response) = $this->createPaymentWithHttpInfo($payment2, $contentType);
        return $response;
    }

    /**
     * Operation createPaymentWithHttpInfo
     *
     * Create a new Payment.
     *
     * @param  \SynergiTech\Cinolla\Model\Payment2 $payment2 The JSON Payload. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPayment'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \SynergiTech\Cinolla\Model\Payment, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPaymentWithHttpInfo(
        \SynergiTech\Cinolla\Model\Payment2 $payment2,
        string $contentType = self::contentTypes['createPayment'][0]
    ): array
    {
        $request = $this->createPaymentRequest($payment2, $contentType);

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


            switch($statusCode) {
                case 201:
                    if (in_array('\SynergiTech\Cinolla\Model\Payment', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SynergiTech\Cinolla\Model\Payment' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SynergiTech\Cinolla\Model\Payment', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\SynergiTech\Cinolla\Model\Payment';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SynergiTech\Cinolla\Model\Payment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createPaymentAsync
     *
     * Create a new Payment.
     *
     * @param  \SynergiTech\Cinolla\Model\Payment2 $payment2 The JSON Payload. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPayment'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function createPaymentAsync(
        \SynergiTech\Cinolla\Model\Payment2 $payment2,
        string $contentType = self::contentTypes['createPayment'][0]
    ): PromiseInterface
    {
        return $this->createPaymentAsyncWithHttpInfo($payment2, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createPaymentAsyncWithHttpInfo
     *
     * Create a new Payment.
     *
     * @param  \SynergiTech\Cinolla\Model\Payment2 $payment2 The JSON Payload. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPayment'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function createPaymentAsyncWithHttpInfo(
        \SynergiTech\Cinolla\Model\Payment2 $payment2,
        string $contentType = self::contentTypes['createPayment'][0]
    ): PromiseInterface
    {
        $returnType = '\SynergiTech\Cinolla\Model\Payment';
        $request = $this->createPaymentRequest($payment2, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
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
     * Create request for operation 'createPayment'
     *
     * @param  \SynergiTech\Cinolla\Model\Payment2 $payment2 The JSON Payload. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPayment'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createPaymentRequest(
        \SynergiTech\Cinolla\Model\Payment2 $payment2,
        string $contentType = self::contentTypes['createPayment'][0]
    ): Request
    {

        // verify the required parameter 'payment2' is set
        if ($payment2 === null || (is_array($payment2) && count($payment2) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payment2 when calling createPayment'
            );
        }


        $resourcePath = '/v3/client/payments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment2)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment2));
            } else {
                $httpBody = $payment2;
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
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
     * Operation getPayments
     *
     * Fetch a collection of Payments.
     *
     * @param  int|null $offset An offset to return a paginated list of results (optional, default to 0)
     * @param  int|null $limit The limit on the number of results (optional, default to 100)
     * @param  \DateTime|null $startDate Start date of a date range. Used in conjunction with endDate to create a date range to filter by. (optional)
     * @param  \DateTime|null $endDate End date of a date range. Used in conjunction with startDate to create a date range to filter by. (optional)
     * @param  string|null $dateRangeFilter Used in conjunction with startDate and endDate to filter Invoices. (optional, default to 'datePaid')
     * @param  bool|null $includeRemoved Whether or not to include entities flagged as removed (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayments'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \SynergiTech\Cinolla\Model\Payment[]
     */
    public function getPayments(
        ?int $offset = 0,
        ?int $limit = 100,
        ?\DateTime $startDate = null,
        ?\DateTime $endDate = null,
        ?string $dateRangeFilter = 'datePaid',
        ?bool $includeRemoved = false,
        string $contentType = self::contentTypes['getPayments'][0]
    ): array
    {
        list($response) = $this->getPaymentsWithHttpInfo($offset, $limit, $startDate, $endDate, $dateRangeFilter, $includeRemoved, $contentType);
        return $response;
    }

    /**
     * Operation getPaymentsWithHttpInfo
     *
     * Fetch a collection of Payments.
     *
     * @param  int|null $offset An offset to return a paginated list of results (optional, default to 0)
     * @param  int|null $limit The limit on the number of results (optional, default to 100)
     * @param  \DateTime|null $startDate Start date of a date range. Used in conjunction with endDate to create a date range to filter by. (optional)
     * @param  \DateTime|null $endDate End date of a date range. Used in conjunction with startDate to create a date range to filter by. (optional)
     * @param  string|null $dateRangeFilter Used in conjunction with startDate and endDate to filter Invoices. (optional, default to 'datePaid')
     * @param  bool|null $includeRemoved Whether or not to include entities flagged as removed (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayments'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \SynergiTech\Cinolla\Model\Payment[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentsWithHttpInfo(
        ?int $offset = 0,
        ?int $limit = 100,
        ?\DateTime $startDate = null,
        ?\DateTime $endDate = null,
        ?string $dateRangeFilter = 'datePaid',
        ?bool $includeRemoved = false,
        string $contentType = self::contentTypes['getPayments'][0]
    ): array
    {
        $request = $this->getPaymentsRequest($offset, $limit, $startDate, $endDate, $dateRangeFilter, $includeRemoved, $contentType);

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


            switch($statusCode) {
                case 200:
                    if (in_array('\SynergiTech\Cinolla\Model\Payment[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SynergiTech\Cinolla\Model\Payment[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SynergiTech\Cinolla\Model\Payment[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\SynergiTech\Cinolla\Model\Payment[]';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        '\SynergiTech\Cinolla\Model\Payment[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPaymentsAsync
     *
     * Fetch a collection of Payments.
     *
     * @param  int|null $offset An offset to return a paginated list of results (optional, default to 0)
     * @param  int|null $limit The limit on the number of results (optional, default to 100)
     * @param  \DateTime|null $startDate Start date of a date range. Used in conjunction with endDate to create a date range to filter by. (optional)
     * @param  \DateTime|null $endDate End date of a date range. Used in conjunction with startDate to create a date range to filter by. (optional)
     * @param  string|null $dateRangeFilter Used in conjunction with startDate and endDate to filter Invoices. (optional, default to 'datePaid')
     * @param  bool|null $includeRemoved Whether or not to include entities flagged as removed (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayments'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getPaymentsAsync(
        ?int $offset = 0,
        ?int $limit = 100,
        ?\DateTime $startDate = null,
        ?\DateTime $endDate = null,
        ?string $dateRangeFilter = 'datePaid',
        ?bool $includeRemoved = false,
        string $contentType = self::contentTypes['getPayments'][0]
    ): PromiseInterface
    {
        return $this->getPaymentsAsyncWithHttpInfo($offset, $limit, $startDate, $endDate, $dateRangeFilter, $includeRemoved, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPaymentsAsyncWithHttpInfo
     *
     * Fetch a collection of Payments.
     *
     * @param  int|null $offset An offset to return a paginated list of results (optional, default to 0)
     * @param  int|null $limit The limit on the number of results (optional, default to 100)
     * @param  \DateTime|null $startDate Start date of a date range. Used in conjunction with endDate to create a date range to filter by. (optional)
     * @param  \DateTime|null $endDate End date of a date range. Used in conjunction with startDate to create a date range to filter by. (optional)
     * @param  string|null $dateRangeFilter Used in conjunction with startDate and endDate to filter Invoices. (optional, default to 'datePaid')
     * @param  bool|null $includeRemoved Whether or not to include entities flagged as removed (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayments'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getPaymentsAsyncWithHttpInfo(
        ?int $offset = 0,
        ?int $limit = 100,
        ?\DateTime $startDate = null,
        ?\DateTime $endDate = null,
        ?string $dateRangeFilter = 'datePaid',
        ?bool $includeRemoved = false,
        string $contentType = self::contentTypes['getPayments'][0]
    ): PromiseInterface
    {
        $returnType = '\SynergiTech\Cinolla\Model\Payment[]';
        $request = $this->getPaymentsRequest($offset, $limit, $startDate, $endDate, $dateRangeFilter, $includeRemoved, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
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
     * Create request for operation 'getPayments'
     *
     * @param  int|null $offset An offset to return a paginated list of results (optional, default to 0)
     * @param  int|null $limit The limit on the number of results (optional, default to 100)
     * @param  \DateTime|null $startDate Start date of a date range. Used in conjunction with endDate to create a date range to filter by. (optional)
     * @param  \DateTime|null $endDate End date of a date range. Used in conjunction with startDate to create a date range to filter by. (optional)
     * @param  string|null $dateRangeFilter Used in conjunction with startDate and endDate to filter Invoices. (optional, default to 'datePaid')
     * @param  bool|null $includeRemoved Whether or not to include entities flagged as removed (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayments'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentsRequest(
        ?int $offset = 0,
        ?int $limit = 100,
        ?\DateTime $startDate = null,
        ?\DateTime $endDate = null,
        ?string $dateRangeFilter = 'datePaid',
        ?bool $includeRemoved = false,
        string $contentType = self::contentTypes['getPayments'][0]
    ): Request
    {








        $resourcePath = '/v3/client/payments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $startDate,
            'startDate', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $endDate,
            'endDate', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $dateRangeFilter,
            'dateRangeFilter', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $includeRemoved,
            'includeRemoved', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
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
            'GET',
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
    protected function createHttpClientOption(): array
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
