<?php

namespace MyApp;

use Lipid\Action;
use Lipid\Request;
use Lipid\Response;
use Lipid\Request\RqGET;
use Lipid\Tpl;
use Lipid\Tpl\Twig;

/**
 * Index page
 *
 * Here, we show greeting from index.twig template.
 *
 * @author {- write your name in history -}
 */
final class ActIndex implements Action {
    private $GET;
    private $tpl;

    public function __construct(
        Request $GET = null,
        Tpl $tpl = null
    )
    {
        $this->GET = $GET ?? new RqGET();
        $this->tpl = $tpl ?? new Twig('index.twig', getcwd() . '/tpl');
    }

    public function handle(Response $resp): Response
    {
        $name = $this->GET->param('name');

        return $resp->withBody(
                $this->tpl->render([
                    'name' => $name
                ])
        );
    }
}
