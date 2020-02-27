<?php


namespace Controllers;


use Lipid\Action;
use Lipid\Response;
use Lipid\Tpl\Twig;

class ActProfile implements Action
{
    private $tpl;

    public function __construct()
    {
        $this->tpl = $tpl ?? new Twig('profile.twig',getcwd().'/tpl');
    }

    public function handle(Response $resp): Response
    {
        return $resp->withBody($this->tpl->render([]));
    }
}
