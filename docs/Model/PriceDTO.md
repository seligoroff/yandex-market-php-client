# # PriceDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **float** | Цена на товар. | [optional]
**discount_base** | **float** | Цена на товар без скидки.  Число должно быть целым. Вы можете указать цену со скидкой от 5 до 75%.  Передавайте этот параметр при каждом обновлении цены, если предоставляете скидку на товар. | [optional]
**currency_id** | [**\YandexMarketApi\Model\CurrencyType**](CurrencyType.md) |  | [optional]
**vat** | **int** | Идентификатор ставки НДС, применяемой для товара:  * 2 — 10%. * 5 — 0%. * 6 — не облагается НДС. * 7 — 20%.  Если параметр не указан, используется ставка НДС, установленная в кабинете. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
