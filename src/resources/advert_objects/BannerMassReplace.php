<?php
/**
 * User: Aleksandrov Artem
 * Date: 21.10.2019
 * Time: 7:53
 */

namespace dugard\myTarget\api\resources\advert_objects;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс для массовой регистрозависимой замены содержимого текстблоков и ссылок рекламных объявлений.
 * Обрабатывает вплоть до 200 объектов за 1 запрос.
 * Class BannerMassReplace
 * @package dugard\myTarget\api\methods\advert_objects
 * @see https://target.my.com/doc/api/ru/resource/BannerMassReplace
 */
class BannerMassReplace extends Resource
{
    /**
     * @param array $params
     * @return mixed
     */
    public function post(array $params)
    {
        return $this->request('post', '/api/v1/banners/mass_replace', ['json' => $params]);
    }
}