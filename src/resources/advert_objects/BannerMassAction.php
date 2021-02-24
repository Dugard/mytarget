<?php
/**
 * User: Aleksandrov Artem
 * Date: 21.10.2019
 * Time: 7:51
 */

namespace dugard\myTarget\api\resources\advert_objects;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс, позволяющий массово обновлять статусы баннеров (не более 200 за раз). Обновление происходит транзакционно:
 * при возникновении ошибки обновления хотя бы одного объекта ни одно изменение не применится
 * Class BannerMassAction
 * @package dugard\myTarget\api\methods\advert_objects
 * @see https://target.my.com/doc/api/ru/resource/BannerMassAction
 */
class BannerMassAction extends Resource
{
    /**
     * @param array $params
     * @return mixed
     */
    public function post(array $params)
    {
        return $this->request('post', 'banners/mass_action', ['json' => $params]);
    }
}