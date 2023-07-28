<?php
/**
 * OrdersStatsCommissionType
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
 * OrdersStatsCommissionType Class Doc Comment
 *
 * @category Class
 * @description Услуга:  * &#x60;FEE&#x60; — размещение товара на Маркете; * &#x60;FULFILLMENT&#x60; — складская обработка; * &#x60;LOYALTY_PARTICIPATION_FEE&#x60; — участие в программе лояльности и отзывы за баллы, если они подключены; * &#x60;AUCTION_PROMOTION&#x60; — буст продаж; * &#x60;INSTALLMENT&#x60; — рассрочка; * &#x60;DELIVERY_TO_CUSTOMER&#x60; — доставка покупателю; * &#x60;EXPRESS_DELIVERY_TO_CUSTOMER&#x60; — экспресс-доставка покупателю; * &#x60;AGENCY&#x60; — прием платежа покупателя; * &#x60;PAYMENT_TRANSFER&#x60; — перевод платежа покупателя; * &#x60;RETURNED_ORDERS_STORAGE&#x60; — хранение невыкупов и возвратов; * &#x60;SORTING&#x60; — обработка заказа.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrdersStatsCommissionType
{
    /**
     * Possible values of this enum
     */
    public const FEE = 'FEE';

    public const FULFILLMENT = 'FULFILLMENT';

    public const LOYALTY_PARTICIPATION_FEE = 'LOYALTY_PARTICIPATION_FEE';

    public const AUCTION_PROMOTION = 'AUCTION_PROMOTION';

    public const INSTALLMENT = 'INSTALLMENT';

    public const DELIVERY_TO_CUSTOMER = 'DELIVERY_TO_CUSTOMER';

    public const EXPRESS_DELIVERY_TO_CUSTOMER = 'EXPRESS_DELIVERY_TO_CUSTOMER';

    public const AGENCY = 'AGENCY';

    public const PAYMENT_TRANSFER = 'PAYMENT_TRANSFER';

    public const RETURNED_ORDERS_STORAGE = 'RETURNED_ORDERS_STORAGE';

    public const SORTING = 'SORTING';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FEE,
            self::FULFILLMENT,
            self::LOYALTY_PARTICIPATION_FEE,
            self::AUCTION_PROMOTION,
            self::INSTALLMENT,
            self::DELIVERY_TO_CUSTOMER,
            self::EXPRESS_DELIVERY_TO_CUSTOMER,
            self::AGENCY,
            self::PAYMENT_TRANSFER,
            self::RETURNED_ORDERS_STORAGE,
            self::SORTING
        ];
    }
}


