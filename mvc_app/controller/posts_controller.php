<?php
    include_once('BaseController.php');
    include_once('./model/posts.php');

    class PostsController extends BaseController{

        public function __construct () {
            $this->folder = 'posts';
        }

        public function index () {
            $data = Post::getAll();
            $this->render ('index', $data);
        }

        public function detail () {
            if (!isset($_GET['title'])) {
                header ('Location: ./index.php?controller=pages&action=error');
            }
            $title = $_GET['title'];
            $data = Post::getOneByTitle($title);
            if ($data) {
                $this->render('detail', $data);
            } else {
                header ('Location: ./index.php?controller=pages&action=error');
            }
        }
    }
?>