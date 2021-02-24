<?php
/**
 * User: Aleksandrov Artem
 * Date: 21.10.2019
 * Time: 9:04
 */

namespace dugard\myTarget\api\resources\references;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс, позволяющий получать информацию о географических регионах
 * Class Region
 * @package dugard\myTarget\api\methods\references
 * @see https://target.my.com/doc/api/ru/resource/Region
 */
class Region extends Resource
{
    /**
     * Запрос возвращает данные о регионах
     * @param array $filters
     * @return mixed
     */
    public function get(array $filters = [])
    {
        return $this->request('get', 'regions', ['query' => $filters]);
    }
}