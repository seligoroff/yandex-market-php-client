# # QuarantineOfferDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | Ваш SKU — идентификатор товара в вашей системе.  Разрешена любая последовательность длиной до 80 знаков. В нее могут входить английские и русские буквы, цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * SKU товара нельзя менять — можно только удалить товар и добавить заново с новым SKU.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields) | [optional]
**current_price** | [**\YandexMarketApi\Model\BasePriceDTO**](BasePriceDTO.md) |  | [optional]
**last_valid_price** | [**\YandexMarketApi\Model\BasePriceDTO**](BasePriceDTO.md) |  | [optional]
**verdicts** | [**\YandexMarketApi\Model\PriceQuarantineVerdictDTO[]**](PriceQuarantineVerdictDTO.md) | Причины попадания товара в карантин. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
