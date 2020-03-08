<?php


namespace Controllers;


use Exception;
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
        try {
            if ($this->POST) {
                if (empty($this->POST['name'])) {
                    throw new Exception('Заполните имя');
                }
                if (empty($this->POST['text'])) {
                    throw new Exception('Заполните текст комментария');
                }

                $comment = new CommentsList();
                $comment->add($this->POST['name'], $this->POST['text']);
            }
        } catch (Exception $exception) {
            return $resp->withBody($this->tpl->render([
                'error' => $exception->getMessage(),
                'comments' => (new CommentsList())->list()
            ]));
        }
        return $resp->withBody($this->tpl->render([
            'messageIsSend' => true,
            'comments' => $comment->list()
        ]));
    }
}
