<?php


namespace Controllers;


use Lipid\Action;
use Lipid\Response;
use Lipid\Tpl\Twig;

class ActAdmin implements Action
{
    private $tpl;

    public function __construct()
    {
        $this->tpl = $tpl ?? new Twig('admin.twig',getcwd().'/tpl/admin');
    }

    public function handle(Response $resp): Response
    {
        return $resp->withBody($this->tpl->render([]));
    }
}
