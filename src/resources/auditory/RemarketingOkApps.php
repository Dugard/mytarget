<?php
/**
 * User: Aleksandrov Artem
 * Date: 20.10.2019
 * Time: 11:21
 */

namespace dugard\myTarget\api\resources\auditory;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс, позволяющий управлять приложениями в соцсети Одноклассники, которые пользователь добавил в доступные
 * для использования в целевых аудиториях источники данных. Приложения можно использовать для настройки
 * таргетинга на их пользователей.
 * Class RemarketingOkApps
 * @package dugard\myTarget\api\methods\auditory
 * @see https://target.my.com/doc/api/ru/resource/RemarketingOkApps
 */
class RemarketingOkApps extends Resource
{
    /**
     * Запрос возвращает список всех приложений соцсети Одноклассники, добавленных пользователем в источники данных
     * @return mixed
     */
    public function get()
    {
        return $this->request('get', 'remarketing/ok_apps');
    }

    /**
     * Запрос добавляет приложение соцсети Одноклассники в список доступных источников данных
     * @param array $params
     * @return mixed
     */
    public function post(array $params)
    {
        return $this->request('post', 'remarketing/ok_apps', ['json' => $params]);
    }
}