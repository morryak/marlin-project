<?php


namespace Controllers;

//use Lipid\Tpl\Twig;
use MyApp\MyPDO;
use PDO;

/**
 * Вывод/добавление комментариев
 *
 * @author  Ilin Mikhail
 */
class CommentsList implements Comments
{
    private $pdo;
//    private $tpl;
    private $comment;

    public function __construct(PDO $pdo = null)
    {
////        $this->tpl = $tpl ?? new Twig('index.twig', getcwd() . '/tpl');
        $this->pdo = $pdo ?? new MyPDO();
    }

    /**
     *  Добавление комментария
     *
     * @param string $comment Комментарий
//     * @param string $userID ID пользователя
     */
    public function add(string $comment): void
    {
        // TODO: Implement add() method.
    }

    /**
     * Список комментариев
     *
     * @return array
     */
    public function list(): array
    {
        $pdo = new MyPDO();
        $sql = "SELECT * FROM comments";
        $statement = $pdo->query($sql);
        $statement->execute();
//        var_dump($statement->fetchAll());die();
        return  $statement->fetchAll();
    }
}
