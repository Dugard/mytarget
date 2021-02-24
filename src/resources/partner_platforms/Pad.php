<?php
/**
 * User: Aleksandrov Artem
 * Date: 20.10.2019
 * Time: 18:50
 */

namespace dugard\myTarget\api\resources\partner_platforms;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс, позволяющий читать/редактировать блок рекламной площадки
 * Class Pad
 * @package dugard\myTarget\api\methods\partner_platforms
 * @see https://target.my.com/doc/api/ru/resource/Pad
 */
class Pad extends Resource
{
    /**
     * Запрос возвращает данные указанного блока рекламной площадки
     * @param string $id
     * @return mixed
     */
    public function get(string $id)
    {
        return $this->request('get', "pads/$id");
    }

    /**
     * Запрос изменяет данные указанного блока рекламной площадки
     * @param string $id
     * @param array $params
     * @return mixed
     */
    public function post(string $id, array $params)
    {
        return $this->request('post', "pads/$id", ['json' => $params]);
    }
}