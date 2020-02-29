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
     */
    public function add(string $comment): void;

    /**
     * Список комментариев
     *
     * @return array
     */
    public function list(): array;
}
