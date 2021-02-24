<?php
/**
 * User: Aleksandrov Artem
 * Date: 21.10.2019
 * Time: 9:06
 */

namespace dugard\myTarget\api\resources\references;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс, позволяющий получить информацию о регионах, указанных пользователями
 * Class UserGeo
 * @package dugard\myTarget\api\methods\references
 * @see https://target.my.com/doc/api/ru/resource/UserGeo
 */
class UserGeo extends Resource
{
    /**
     * @param array $filters
     * @return mixed
     */
    public function get(array $filters = [])
    {
        return $this->request('get', 'user_geo', ['query' => $filters]);
    }
}