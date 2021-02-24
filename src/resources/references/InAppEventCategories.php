<?php
/**
 * User: Aleksandrov Artem
 * Date: 21.10.2019
 * Time: 8:57
 */

namespace dugard\myTarget\api\resources\references;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс позволяющий получит информацию о категориях событий в мобильном приложении
 * Class InAppEventCategories
 * @package dugard\myTarget\api\methods\references
 * @see https://target.my.com/doc/api/ru/resource/InAppEventCategories
 */
class InAppEventCategories extends Resource
{
    /**
     * Запрос возвращает список категорий событий в мобильном приложении
     * @return mixed
     */
    public function get()
    {
        return $this->request('get', '/api/v1/inapp_event_categories');
    }
}