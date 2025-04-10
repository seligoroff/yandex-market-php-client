# YandexMarketApi\FeedCategoriesApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCampaignFeedCategories()**](FeedCategoriesApi.md#getCampaignFeedCategories) | **GET** /campaigns/{campaignId}/feeds/categories | Категории магазина |
| [**getFeedCategories()**](FeedCategoriesApi.md#getFeedCategories) | **GET** /campaigns/{campaignId}/feeds/{feedId}/categories | Категории прайс-листа |


## `getCampaignFeedCategories()`

```php
getCampaignFeedCategories($campaign_id, $page, $page_size): \YandexMarketApi\Model\GetCampaignCategoriesResponse
```

Категории магазина

{% note alert \"Deprecated\" %}  Этот метод устарел. Не используйте его.  {% endnote %}  Возвращает список категорий предложений для магазина по всем прайс-листам этого магазина, размещенным на Маркете. Информация о категориях для отключенных прайс-листов не предоставляется.  В ответе на запрос для каждой категории указывается название, ее идентификатор и идентификатор родительской категории. Список сортируется сначала по возрастанию идентификатора прайс-листа, а затем по возрастанию идентификатора категории. Если категорий много, результаты выдаются постранично.  Для методов `GET campaigns/{campaignId}/feeds/categories` и `GET campaigns/{campaignId}/feeds/{feedId}/categories` действует групповое ресурсное ограничение. Ограничение вводится на суммарное количество категорий, информация о которых запрошена при помощи этих методов.  |**⚙️ Лимит:** [не более 50 000 запросов в сутки](*rule)| |-|  [//]: <> (rule: Лимит рассчитывается индивидуально и зависит от количества категорий.)   {% note info %}  Количество категорий берется за предыдущий день.  {% endnote %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\FeedCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$page = 1; // int | Номер страницы результатов.  Значение по умолчанию: 1.  Используется вместе с параметром `page_size`.  `page_number` игнорируется, если задан `page_token`, `limit` или `offset`.
$page_size = 56; // int | Размер страницы.  Используется вместе с параметром `page_number`.  `page_size` игнорируется, если задан `page_token`, `limit` или `offset`.

try {
    $result = $apiInstance->getCampaignFeedCategories($campaign_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedCategoriesApi->getCampaignFeedCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **page** | **int**| Номер страницы результатов.  Значение по умолчанию: 1.  Используется вместе с параметром &#x60;page_size&#x60;.  &#x60;page_number&#x60; игнорируется, если задан &#x60;page_token&#x60;, &#x60;limit&#x60; или &#x60;offset&#x60;. | [optional] [default to 1] |
| **page_size** | **int**| Размер страницы.  Используется вместе с параметром &#x60;page_number&#x60;.  &#x60;page_size&#x60; игнорируется, если задан &#x60;page_token&#x60;, &#x60;limit&#x60; или &#x60;offset&#x60;. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetCampaignCategoriesResponse**](../Model/GetCampaignCategoriesResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedCategories()`

```php
getFeedCategories($campaign_id, $feed_id, $page, $page_size): \YandexMarketApi\Model\GetFeedCategoriesResponse
```

Категории прайс-листа

{% note alert \"Deprecated\" %}  Этот метод устарел. Не используйте его.  {% endnote %}  Возвращает список категорий предложений из прайс-листа, размещенного на Маркете для заданного магазина. Информация о категориях для отключенных прайс-листов не предоставляется.  В ответе на запрос для каждой категории возвращается ее название, идентификатор и идентификатор родительской категории. Список сортируется по возрастанию идентификатора категории. Если категорий много, результаты выдаются постранично.  Для методов `GET campaigns/{campaignId}/feeds/categories` и `GET campaigns/{campaignId}/feeds/{feedId}/categories` действует групповое ресурсное ограничение. Ограничение вводится на суммарное количество категорий, информация о которых запрошена при помощи этих методов.  |**⚙️ Лимит:** [не более 50 000 запросов в сутки](*rule)| |-|  [//]: <> (rule: Лимит рассчитывается индивидуально и зависит от количества категорий.)  {% note info %}  Количество категорий берется за предыдущий день.  {% endnote %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\FeedCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$feed_id = 56; // int | Идентификатор прайс-листа.
$page = 1; // int | Номер страницы результатов.  Значение по умолчанию: 1.  Используется вместе с параметром `page_size`.  `page_number` игнорируется, если задан `page_token`, `limit` или `offset`.
$page_size = 56; // int | Размер страницы.  Используется вместе с параметром `page_number`.  `page_size` игнорируется, если задан `page_token`, `limit` или `offset`.

try {
    $result = $apiInstance->getFeedCategories($campaign_id, $feed_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedCategoriesApi->getFeedCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании в API и магазина в кабинете. Каждая кампания в API соответствует магазину в кабинете.  Чтобы узнать идентификаторы своих магазинов, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **feed_id** | **int**| Идентификатор прайс-листа. | |
| **page** | **int**| Номер страницы результатов.  Значение по умолчанию: 1.  Используется вместе с параметром &#x60;page_size&#x60;.  &#x60;page_number&#x60; игнорируется, если задан &#x60;page_token&#x60;, &#x60;limit&#x60; или &#x60;offset&#x60;. | [optional] [default to 1] |
| **page_size** | **int**| Размер страницы.  Используется вместе с параметром &#x60;page_number&#x60;.  &#x60;page_size&#x60; игнорируется, если задан &#x60;page_token&#x60;, &#x60;limit&#x60; или &#x60;offset&#x60;. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetFeedCategoriesResponse**](../Model/GetFeedCategoriesResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
