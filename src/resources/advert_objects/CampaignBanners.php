<?php
/**
 * User: Aleksandrov Artem
 * Date: 21.10.2019
 * Time: 8:01
 */

namespace dugard\myTarget\api\resources\advert_objects;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс, позволяющий создавать рекламные объявления внутри кампании
 * Class CampaignBanners
 * @package dugard\myTarget\api\methods\advert_objects
 * @see https://target.my.com/doc/api/ru/resource/CampaignBanners
 */
class CampaignBanners extends Resource
{
    /**
     * Создание рекламного объявления
     * @param string $campaign_id
     * @param array $params
     * @return mixed
     */
    public function post(string $campaign_id, array $params)
    {
        return $this->request('post', "campaigns/$campaign_id/banners", ['json' => $params]);
    }
}