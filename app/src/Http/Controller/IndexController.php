<?php

namespace MyApp\Http\Controller;

class IndexController extends AbstractController
{

    /**
     * Index action
     *
     * @return void
     */
    public function index(): void
    {
        $this->prepareView('index.phtml');
        $this->view->title = 'My App - Index';
        $this->send();
    }

    /**
     * Error action
     *
     * @return void
     */
    public function error(): void
    {
        $this->prepareView('error.phtml');
        $this->view->title = 'My App - Error';
        $this->send(404);
    }

    /**
     * Maintenance action
     *
     * @return void
     */
    public function maintenance(): void
    {
        $this->prepareView('maintenance.phtml');
        $this->view->title = 'My App - Website is Down';
        $this->send(503);
    }

}
