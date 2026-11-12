<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../models/Post.php';

class BlogController
{
    public function showAllPosts(): void
    {
        $query = trim($_GET['query'] ?? '');
        $posts = ($query !== '') ? Post::search($query) : Post::getAll();

        $parsedown = new Parsedown();
        $parsedown->setSafeMode(true);

        include __DIR__ . '/../views/postsView.php';
    }
}