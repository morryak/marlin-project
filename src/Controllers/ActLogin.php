<?php


namespace Controllers;


use Lipid\Action;
use Lipid\Response;
use Lipid\Tpl\Twig;

class ActLogin implements Action
{
    private $tpl;

    public function __construct()
    {
        $this->tpl = $tpl ?? new Twig('login.twig',getcwd().'/tpl');
    }

    public function handle(Response $resp): Response
    {
        return $resp->withBody($this->tpl->render([

        ]));
    }
}
