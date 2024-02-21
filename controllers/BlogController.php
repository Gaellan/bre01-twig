<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class BlogController extends AbstractController
{
    public function home() : void
    {
        $pm = new PostManager();
        $posts = $pm->findAll();

        $this->render("home.html.twig", [
            "posts" => $posts
        ]);
    }
}