<?php
/**
 * OfferProcessingStatusTypeTest
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
 * Please update the test case below to test the model.
 */

namespace YandexMarketApi\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * OfferProcessingStatusTypeTest Class Doc Comment
 *
 * @category    Class
 * @description Статус публикации товара:  * &#x60;READY&#x60; — товар прошел модерацию. Чтобы разместить его на Маркете, установите для него цену. * &#x60;IN_WORK&#x60; — товар проходит модерацию. Это занимает несколько дней. * &#x60;NEED_CONTENT&#x60; — для товара без SKU на Маркете &#x60;marketSku&#x60; нужно найти карточку самостоятельно (через API или кабинет продавца на Маркете) или создать ее, если товар еще не продается на Маркете. * &#x60;NEED_INFO&#x60; — товар не прошел модерацию из-за ошибок или недостающих сведений в описании товара. Информация о причинах отклонения возвращается в параметре &#x60;notes&#x60;. * &#x60;REJECTED&#x60; — товар не прошел модерацию, так как Маркет не планирует размещать подобные товары. * &#x60;SUSPENDED&#x60; — товар не прошел модерацию, так как Маркет пока не размещает подобные товары.
 * @package     YandexMarketApi
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class OfferProcessingStatusTypeTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "OfferProcessingStatusType"
     */
    public function testOfferProcessingStatusType()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
