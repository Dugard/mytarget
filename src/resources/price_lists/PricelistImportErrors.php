<?php
/**
 * User: Aleksandrov Artem
 * Date: 20.10.2019
 * Time: 21:37
 */

namespace dugard\myTarget\api\resources\price_lists;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс, позволяющий получить список ошибок импорта прайс-листов
 * Class PricelistImportErrors
 * @package dugard\myTarget\api\methods\price_lists
 * @see https://target.my.com/doc/api/ru/resource/PricelistImportErrors
 */
class PricelistImportErrors extends Resource
{
    /**
     * Запрос возвращает список ошибок импорта прайс-листов
     * @param string $pricelist_ids
     * @return mixed
     */
    public function get(string $pricelist_ids)
    {
        return $this->request('get', "remarketing/pricelists/$pricelist_ids/import_errors");
    }
}