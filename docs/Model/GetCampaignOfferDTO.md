# # GetCampaignOfferDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | Ваш SKU — идентификатор товара в вашей системе.  Разрешена любая последовательность длиной до 80 знаков. В нее могут входить английские и русские буквы, цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * SKU товара нельзя менять — можно только удалить товар и добавить заново с новым SKU.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields) |
**quantum** | [**\YandexMarketApi\Model\QuantumDTO**](QuantumDTO.md) |  | [optional]
**available** | **bool** | Есть ли товар в продаже. | [optional]
**basic_price** | [**\YandexMarketApi\Model\GetPriceWithDiscountDTO**](GetPriceWithDiscountDTO.md) |  | [optional]
**campaign_price** | [**\YandexMarketApi\Model\GetPriceWithVatDTO**](GetPriceWithVatDTO.md) |  | [optional]
**status** | [**\YandexMarketApi\Model\OfferCampaignStatusType**](OfferCampaignStatusType.md) |  | [optional]
**errors** | [**\YandexMarketApi\Model\OfferErrorDTO[]**](OfferErrorDTO.md) | Ошибки, препятствующие размещению товара на витрине. | [optional]
**warnings** | [**\YandexMarketApi\Model\OfferErrorDTO[]**](OfferErrorDTO.md) | Предупреждения, не препятствующие размещению товара на витрине. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
