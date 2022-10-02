<?php

namespace core;

class Controller
{
    /**
     * @return void
     * include view root for page main
     */
    public function main()
    {
        return View::root('main');
    }
    /**
     * @return void
     * include view root for page about
     */
    public function about()
    {
        return View::root('about');
    }
    /**
     * @return void
     * include view root for page contacts
     */
    public function contacts()
    {
        return View::root('contacts');
    }
}