<?php
/**
 * User: Aleksandrov Artem
 * Date: 21.10.2019
 * Time: 7:55
 */

namespace dugard\myTarget\api\resources\advert_objects;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс, позволяющий получить список всех рекламных объявлений пользователя.
 * Создание баннеров осуществляется с помощью ресурса CampaignBanners.
 * Class Banners
 * @package dugard\myTarget\api\methods\advert_objects
 * @see https://target.my.com/doc/api/ru/resource/Banners
 */
class Banners extends Resource
{
    /**
     * @param array $filters
     * @return mixed
     */
    public function get(array $filters = [])
    {
        return $this->request('get', 'banners', ['query' => $filters]);
    }
}