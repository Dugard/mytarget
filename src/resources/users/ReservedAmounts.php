<?php
/**
 * User: Aleksandrov Artem
 * Date: 20.10.2019
 * Time: 21:21
 */

namespace dugard\myTarget\api\resources\users;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс для получения информации о средствах клиентов агентства
 * Class ReservedAmounts
 * @package dugard\myTarget\api\methods\users
 * @see https://target.my.com/doc/api/ru/resource/ReservedAmounts
 */
class ReservedAmounts extends Resource
{
    /**
     * Возвращает список информации о средствах клиента агентства
     * @param string $ids
     * @return mixed
     */
    public function get(string $ids)
    {
        return $this->request('get', "reserved_amounts/$ids");
    }
}