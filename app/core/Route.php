<?php

namespace core;

class Route
{
//тут происходит инициализация выполнения абсолютно всего через функцию инит, также настройка редиректов, ответ сервера если страницы не существует
    /**
     * @return void
     * script initialization
     */
    public static function init()
    {
        /**
         * default page
         */
        $action = 'main';
        if (filter_input(INPUT_GET, 'action')) {
            $action = filter_input(INPUT_GET, 'action');
        }
        $objController = new Controller();
        if (method_exists(Controller::class, $action)) {
            $objController->$action();
        } else {
            self::notFound();
        }
    }

    /**
     * @param string $url
     * @return void
     * redirect to the $url page
     */

    static public function notFound()
    {
        http_response_code(404);
        exit();
    }

}