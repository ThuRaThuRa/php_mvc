<?php

class Post
{
    public $title;
    public $isPublished;
    public function __construct($title, $isPublished)
    {
        $this->title = $title;
        $this->isPublished = $isPublished;
    }
}
$posts = [
    new Post("first post", true),
    new Post("second post", true),
    new Post("third post", true),
    new Post("fouth post", false)
];
// $unPublishedPost = array_filter($posts, function ($post) {
//     return !$post->isPublished;
// });
// $isPublishedPost = array_filter($posts, function ($post) {
//     return $post->isPublished;
// });

$titles = array_map(function ($post) {
    return $post->title;
}, $posts);
// var_dump($unPublishedPost);
// var_dump($isPublishedPost);
echo "<pre>";
print_r($titles);