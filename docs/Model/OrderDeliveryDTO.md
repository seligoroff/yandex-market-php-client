# # OrderDeliveryDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор доставки, присвоенный магазином.  Указывается, только если магазин передал данный идентификатор в ответе на запрос методом [POST cart](../../pushapi/reference/cart.md). | [optional]
**type** | [**\YandexMarketApi\Model\OrderDeliveryType**](OrderDeliveryType.md) |  | [optional]
**service_name** | **string** | Наименование службы доставки. | [optional]
**price** | **float** | {% note warning \&quot;\&quot; %}  Этот параметр устарел. Стоимость доставки смотрите в параметре &#x60;deliveryTotal&#x60;.  {% endnote %}  Стоимость доставки в валюте заказа.  Для отделения целой части от дробной используется точка. | [optional]
**delivery_partner_type** | [**\YandexMarketApi\Model\OrderDeliveryPartnerType**](OrderDeliveryPartnerType.md) |  | [optional]
**courier** | [**\YandexMarketApi\Model\OrderCourierDTO**](OrderCourierDTO.md) |  | [optional]
**dates** | [**\YandexMarketApi\Model\OrderDeliveryDatesDTO**](OrderDeliveryDatesDTO.md) |  | [optional]
**region** | [**\YandexMarketApi\Model\RegionDTO**](RegionDTO.md) |  | [optional]
**address** | [**\YandexMarketApi\Model\OrderDeliveryAddressDTO**](OrderDeliveryAddressDTO.md) |  | [optional]
**vat** | [**\YandexMarketApi\Model\OrderVatType**](OrderVatType.md) |  | [optional]
**delivery_service_id** | **int** | Идентификатор службы доставки. | [optional]
**lift_type** | [**\YandexMarketApi\Model\OrderLiftType**](OrderLiftType.md) |  | [optional]
**lift_price** | **float** | Стоимость подъема на этаж. | [optional]
**outlet_code** | **string** | Идентификатор пункта самовывоза, присвоенный магазином. | [optional]
**outlet_storage_limit_date** | **string** | Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;. | [optional]
**dispatch_type** | [**\YandexMarketApi\Model\OrderDeliveryDispatchType**](OrderDeliveryDispatchType.md) |  | [optional]
**tracks** | [**\YandexMarketApi\Model\OrderTrackDTO[]**](OrderTrackDTO.md) | Информация для отслеживания перемещений посылки. | [optional]
**shipments** | [**\YandexMarketApi\Model\OrderShipmentDTO[]**](OrderShipmentDTO.md) | Информация о посылках. | [optional]
**estimated** | **bool** | Приблизительная ли дата доставки. | [optional]
**eac_type** | [**\YandexMarketApi\Model\OrderDeliveryEacType**](OrderDeliveryEacType.md) |  | [optional]
**eac_code** | **string** | Код подтверждения ЭАПП (для типа &#x60;MERCHANT_TO_COURIER&#x60;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
