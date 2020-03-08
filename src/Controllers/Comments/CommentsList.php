<?php


namespace Controllers;

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

    public function __construct(PDO $pdo = null)
    {
        $this->pdo = $pdo ?? new MyPDO();
    }

    /**
     *  Добавление комментария
     *
     * @param string $comment Комментарий
     * @param string $userName Имя пользователя
     */
    public function add(string $comment, string $userName): void
    {
        $qComment = $this->pdo->quote($comment);
        $qUserName = $this->pdo->quote($userName);
        $qCommentDate = $this->pdo->quote(date("Y-m-d H:i:s"));
        $query = "INSERT INTO comments SET user_comment = $qComment, user_name = $qUserName, comment_date = $qCommentDate";

        $this->pdo->query($query);
    }

    /**
     * Список комментариев
     *
     * @return array
     */
    public function list(): array
    {
        $sql = "SELECT * FROM comments ORDER BY comment_date DESC";
        $statement = $this->pdo->query($sql);
        $statement->execute();

        return $statement->fetchAll();
    }
}
