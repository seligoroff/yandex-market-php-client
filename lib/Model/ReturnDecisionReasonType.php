<?php
/**
 * ReturnDecisionReasonType
 *
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

namespace YandexMarketApi\Model;
use \YandexMarketApi\ObjectSerializer;

/**
 * ReturnDecisionReasonType Class Doc Comment
 *
 * @category Class
 * @description Причины возврата:  * &#x60;BAD_QUALITY&#x60; — бракованный товар (есть недостатки).  * &#x60;DO_NOT_FIT&#x60; — товар не подошел.  * &#x60;WRONG_ITEM&#x60; — привезли не тот товар.  * &#x60;DAMAGE_DELIVERY&#x60; — товар поврежден при доставке.  * &#x60;LOYALTY_FAIL&#x60; — невозможно установить виновного в браке/пересорте.  * &#x60;CONTENT_FAIL&#x60; — ошибочное описание товара по вине Маркета.  * &#x60;UNKNOWN&#x60; — причина не известна.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnDecisionReasonType
{
    /**
     * Possible values of this enum
     */
    public const BAD_QUALITY = 'BAD_QUALITY';

    public const DOES_NOT_FIT = 'DOES_NOT_FIT';

    public const WRONG_ITEM = 'WRONG_ITEM';

    public const DAMAGE_DELIVERY = 'DAMAGE_DELIVERY';

    public const LOYALTY_FAIL = 'LOYALTY_FAIL';

    public const CONTENT_FAIL = 'CONTENT_FAIL';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BAD_QUALITY,
            self::DOES_NOT_FIT,
            self::WRONG_ITEM,
            self::DAMAGE_DELIVERY,
            self::LOYALTY_FAIL,
            self::CONTENT_FAIL,
            self::UNKNOWN
        ];
    }
}


