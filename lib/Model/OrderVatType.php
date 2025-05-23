<?php
/**
 * OrderVatType
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
 * OrderVatType Class Doc Comment
 *
 * @category Class
 * @description Ставка налога на добавленную стоимость (НДС) на товар:  * &#x60;NO_VAT&#x60; — НДС не облагается, используется только для отдельных видов услуг.  * &#x60;VAT_0&#x60; — НДС 0%. Например, используется при продаже товаров, вывезенных в таможенной процедуре экспорта, или при оказании услуг по международной перевозке товаров.  * &#x60;VAT_10&#x60; — НДС 10% (применяется, например, при реализации отдельных продовольственных и медицинских товаров).  * &#x60;VAT_10_110&#x60; — НДС 10/110. Расчетная ставка НДС 10%, применяется только для случая предоплаты.  * &#x60;VAT_20&#x60; — НДС 20% (основная ставка с 2019 года).  * &#x60;VAT_20_120&#x60; — НДС 20/120. Расчетная ставка НДС 20%, применяется только для случая предоплаты.  * &#x60;VAT_18&#x60; — НДС 18% (основная ставка до 2019 года).  * &#x60;VAT_18_118&#x60; — НДС 18/118. Ставка использовалась до 1 января 2019 года, применяется только для случая предоплаты.  * &#x60;UNKNOWN_VALUE&#x60; — неизвестный тип.  Используется только совместно с параметром &#x60;payment-method&#x3D;YANDEX&#x60;.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderVatType
{
    /**
     * Possible values of this enum
     */
    public const NO_VAT = 'NO_VAT';

    public const VAT_0 = 'VAT_0';

    public const VAT_10 = 'VAT_10';

    public const VAT_10_110 = 'VAT_10_110';

    public const VAT_20 = 'VAT_20';

    public const VAT_20_120 = 'VAT_20_120';

    public const VAT_18 = 'VAT_18';

    public const VAT_18_118 = 'VAT_18_118';

    public const UNKNOWN_VALUE = 'UNKNOWN_VALUE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_VAT,
            self::VAT_0,
            self::VAT_10,
            self::VAT_10_110,
            self::VAT_20,
            self::VAT_20_120,
            self::VAT_18,
            self::VAT_18_118,
            self::UNKNOWN_VALUE
        ];
    }
}


