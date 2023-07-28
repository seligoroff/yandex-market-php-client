<?php
/**
 * OrderItemsModificationRequestReasonType
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
 * OrderItemsModificationRequestReasonType Class Doc Comment
 *
 * @category Class
 * @description Причина обновления состава заказа.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderItemsModificationRequestReasonType
{
    /**
     * Possible values of this enum
     */
    public const PARTNER_REQUESTED_REMOVE = 'PARTNER_REQUESTED_REMOVE';

    public const USER_REQUESTED_REMOVE = 'USER_REQUESTED_REMOVE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PARTNER_REQUESTED_REMOVE,
            self::USER_REQUESTED_REMOVE
        ];
    }
}


