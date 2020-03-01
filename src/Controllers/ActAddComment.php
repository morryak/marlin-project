<?php


namespace Controllers;


use Lipid\Action;
use Lipid\Response;
use Lipid\Tpl;
use Lipid\Tpl\Twig;

class ActAddComment implements Action
{
    private $POST;
    private $tpl;

    public function __construct($POST = null, Tpl $tpl = null)
    {
        $this->POST = $POST ?? $_POST;
        $this->tpl = $tpl ?? new Twig('index.twig', getcwd() . '/tpl');
    }

    public function handle(Response $resp): Response
    {
        $comment = new CommentsList();
        $comment->add($this->POST['name'], $this->POST['text']);


        return $resp->withBody($this->tpl->render([
            'messageIsSend' => true,
            'comments' => $comment->list()
        ]));
    }
}
