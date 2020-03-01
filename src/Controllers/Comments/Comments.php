<?php


namespace Controllers;

/**
 * Комментарии
 *
 * @author  Ilin Mikhail
 */
interface Comments
{
    /**
     *  Добавление комментария
     *
     * @param string $comment Комментарий
     * @param string $userName Имя пользователя
     */
    public function add(string $comment,string $userName): void;

    /**
     * Список комментариев
     *
     * @return array
     */
    public function list(): array;
}
