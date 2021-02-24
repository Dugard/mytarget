<?php
/**
 * User: Aleksandrov Artem
 * Date: 21.10.2019
 * Time: 8:30
 */

namespace dugard\myTarget\api\resources\advert_objects;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс позволяет получить информацию о нескольких рекламируемых ссылках
 * Class ReadUrls
 * @package dugard\myTarget\api\methods\advert_objects
 * @see https://target.my.com/doc/api/ru/resource/ReadUrls
 */
class ReadUrls extends Resource
{
    /**
     * Запрос возвращает данные о рекламируемых ссылках
     * @param string $url_ids
     * @return mixed
     */
    public function get(string $url_ids)
    {
        return $this->request('get', "urls/$url_ids");
    }
}