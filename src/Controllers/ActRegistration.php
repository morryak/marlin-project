<?php


namespace Controllers;


use Lipid\Action;
use Lipid\Response;
use Lipid\Tpl\Twig;

class ActRegistration implements Action
{
    private $tpl;

    public function __construct()
    {
        $this->tpl = $tpl ?? new Twig('register.twig',getcwd().'/tpl');
    }


    public function handle(Response $resp): Response
    {
        return $resp->withBody($this->tpl->render([

        ]));
    }
}
