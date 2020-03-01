<?php


namespace Controllers;


use Lipid\Action;
use Lipid\Response;
use MyApp\MyPDO;

class ActAddComment implements Action
{
    private $POST;
    private $pdo;

    public function __construct($POST = null, MyPDO $pdo = null)
    {
        $this->pdo = $pdo ?? new MyPDO();
        $this->POST = $POST ?? $_POST;
    }


    public function handle(Response $resp): Response
    {

        $comment = new CommentsList();
        $comment->add($this->POST['name'], $this->POST['text']);
        return $resp->withHeaders(['Location:/']);


    }
}
