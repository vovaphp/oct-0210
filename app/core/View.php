<?php

namespace core;

class View
{
//класс для подключения содержимого всех вьюшек - тут должен біть шаблон для подключения
    /**
     * @param string $page name off page in view file
     * @param array|null $data additional information for current page
     * @return void
     * create valid root for template page
     */
    public static function root(string $page,array $data = null)
    {
        include 'app/views/templates/tmp.php';
    }
}