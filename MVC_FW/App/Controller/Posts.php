<?php
    namespace App\Controller;
    use Core\Views;
    use App\Models\Post;
    // use Core\Controller as Controller;
    
    class Posts extends \Core\Controller {
        
        public function before () {

        }

        public function after () {

        }

        public function indexAction () {
            $posts = Post::getAll();
            Views::renderTemplate("Posts/Index.html", [
                'posts' => $posts
            ]);
        }

        public function newPostAction () {
            echo "Create a new post";
            // echo "<pre>";
            // print_r($this->routeParams);
        }

        public function editPostAction () {
            $id = $this->routeParams['id'];
            $post = Post::getPostById($id);

            Views::renderTemplate('Posts/Detail.html', [
                'post' => $post[0]
            ]);
        }
    }
?>