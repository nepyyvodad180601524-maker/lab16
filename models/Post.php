<?php
class Post
{
    public string $title;
    public string $content;
    public string $date;

    public function __construct(string $title, string $content, ?string $date = null)
    {
        $this->title = $title;
        $this->content = $content;
        $this->date = $date ?? date('d.m.Y');
    }

    public static function getAll(): array
    {
        return [
            new Post(
                "Мій перший пост",
                "Це приклад **першого поста** в блозі з підтримкою *Markdown*.",
                "10.11.2026"
            ),
            new Post(
                "MVC у PHP",
                "**MVC** — це розділення коду на три логічні частини:\n- `Model` (дані)\n- `View` (подання)\n- `Controller` (логіка)",
                "11.11.2026"
            ),
            new Post(
                "Composer",
                "[Composer](https://getcomposer.org/) — менеджер залежностей для **PHP**, який дозволяє легко підключати бібліотеки.",
                "11.11.2026"
            ),
            new Post(
                "GitHub",
                "**GitHub** — сервіс для контролю версій, зберігання та спільної роботи над кодом.",
                "12.11.2026"
            ),
            new Post(
                "Наступний крок",
                "У цій версії вже реалізовано **пошук**, рендеринг **Markdown** через `Parsedown` та оформлення у вигляді *Bootstrap-карток*!",
                date('d.m.Y')
            ),
        ];
    }

    public static function search(string $query): array
    {
        $posts = self::getAll();
        $query = trim($query);

        if ($query === '') {
            return $posts;
        }

        return array_filter($posts, function (Post $post) use ($query) {
            return mb_stripos($post->title, $query) !== false;
        });
    }
}