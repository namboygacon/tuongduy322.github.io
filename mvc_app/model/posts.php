<?php
    class Post {
        public $title;
        public $author;
        public $description;

        public function __construct ($title, $author, $description) {
            $this->title = $title;
            $this->author = $author;
            $this->description = $description;
        }

        public static function getAll () {
            $data = array (
                'title_1' => [
                    'title' => 'title_1',
                    'author' => 'author_1',
                    'description' => 'description_1'
                ],
                'title_2' => [
                    'title' => 'title_2',
                    'author' => 'author_2',
                    'description' => 'description_2'
                ],
                'title_3' => [
                    'title' => 'title_3',
                    'author' => 'author_3',
                    'description' => 'description_3'
                ]
            );
            return $data;
        }

        public static function getOneByTitle ($title) {
            if (array_key_exists($title, self::getAll())) {
                return self::getAll()[$title];
            }
            
            return false;
        }
    }
?>