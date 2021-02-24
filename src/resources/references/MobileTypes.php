<?php
/**
 * User: Aleksandrov Artem
 * Date: 21.10.2019
 * Time: 9:02
 */

namespace dugard\myTarget\api\resources\references;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс, предоставляющий информацию о типах мобильных устройств
 * Class MobileTypes
 * @package dugard\myTarget\api\methods\references
 * @see https://target.my.com/doc/api/ru/resource/MobileTypes
 */
class MobileTypes extends Resource
{
    /**
     * Запрос возвращает список типов мобильных устройств
     * @return mixed
     */
    public function get()
    {
        return $this->request('get', 'mobile_types');
    }
}