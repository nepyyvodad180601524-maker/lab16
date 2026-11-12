<?php
class Post
{
    public string $title;
    public string $content;

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public static function getAll(): array
    {
        return [
            new Post("Мій перший пост", "Це приклад першого поста в блозі."),
            new Post("MVC у PHP", "MVC — це розділення коду на три частини: Model, View, Controller."),
            new Post("Composer", "Composer — менеджер залежностей для PHP."),
            new Post("GitHub", "GitHub — сервіс для зберігання та спільної роботи над кодом."),
            new Post("Наступний крок", "Далі можна додати пошук, Markdown або базу даних."),
        ];
    }
}