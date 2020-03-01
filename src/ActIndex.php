<?php

namespace MyApp;

use Controllers\CommentsList;
use Lipid\Action;
use Lipid\Response;
use Lipid\Tpl;
use Lipid\Tpl\Twig;

/**
 * Главная страница
 *
 * @author Ilin Mikhail
 */
final class ActIndex implements Action
{
    private $tpl;

    public function __construct(Tpl $tpl = null)
    {
        $this->tpl = $tpl ?? new Twig('index.twig', getcwd() . '/tpl');
    }

    public function handle(Response $resp): Response
    {
        $comments = new CommentsList();

        return $resp->withBody(
            $this->tpl->render([
                'comments' => $comments->list()
            ])
        );
    }
}
