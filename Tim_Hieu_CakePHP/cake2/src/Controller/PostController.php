<?php
    namespace App\Controller;
    use App\Controller\AppController;
    use Cake\Routing\Router;
    use Cake\Datasource\ConnectionManager;
    use Cake\ORM\TableRegistry;
    use Cake\I18n\Time;

    class PostController extends AppController {

        public $url = '';
        public $baseUrl = '';
        private $connection;
        private $table;

        public function initialize () {
            parent::initialize();
            session_start();
            $this->Auth->allow(['listPost', 'postDetail', 'searchUser']);
            $this->viewBuilder()->setLayout('postlayout');
            $this->url = Router::url('/contact-us/a/b', true);
            $this->connection = ConnectionManager::get('default');
            $this->table = TableRegistry::get('tblposts');
            $this->loadModel('Tblposts'); // loaded model
            $this->loadModel('Tblcategory');
            $this->loadModel('Tblsubcategory');
            $this->baseUrl = Router::url('/', true);
            $cats = $this->Tblcategory->find()->toArray();
            $this->set(compact('cats'));
        }

        public function index() {
            $this->set('name', "Andrew Mead");
            $this->set('major', "Dev FrontEnd");

            $channelProfile = array (
                'author' => 'Andrew Mead',
                'name' => 'Online Web Author',
                'social' => "Youtube"
            );
            $count = 100;
            $title = "owtlayout";

            $this->set('data', $channelProfile);
            $this->set(compact("channelProfile", "count", "title"));
        }
        
        public function owt() {
            $title = "owtlayout";
            $this->set(compact("title"));
        }

        public function myform() {
            $this->viewBuilder()->setLayout(false);
        }
        public function myformsubmit() {

            $this->viewBuilder()->setLayout(false);

            if ($this->request->is('post')) {
                echo "<pre>";
                print_r($this->request->getData());
            }
        }
        public function customFunction() {
            $this->set('title', "custom helper");
        }
        public function insertData() {
            $this->autoRender = false;
            $this->connection->insert("employees", [
                'name' => 'john wick',
                'email' => 'john_wick@gmail.com',
                'phone' => '0606066060'
            ]);
        }
        public function updateDate() {
            $this->autoRender = false;
            $this->connection->update("employees", [
                "email" => "acsb@gmail.com"
            ], [
                "id" => 2
            ]);
        }
        public function deleteData() {
            $this->autoRender = false;
            $this->connection->delete("employees", [
                "id" => '3'
            ]);
        }
        public function selectData() {
            $this->autoRender = false;
            $users = $this->connection->newQuery()->select('*')->from('employees')->order(['id' => "desc"])->execute()->fetchAll("assoc");
            foreach($users as $item) {
                echo "Name: ", $item['name'], '</br>';
                echo "email: ", $item['email'], '</br>';
                echo "phone: ", $item['phone'], '</br>';
                echo "-----0-----", '</br>';
            }
        }
        public function createData() {
            $this->autoRender = false;
            $newRecord = $this->table->newEntity();
            $newRecord['name'] = "PG 2";
            $newRecord['email'] = "PG_2@gmail.com";
            $newRecord['phone'] = '3827487232';
            $this->table->save($newRecord);
            echo $newRecord->id;
        }
        public function selectDataTable(){
            $this->autoRender = false;
            $id = 1;
            $userTable = TableRegistry::get('Users');
            $datas =  $userTable->find('all')->where(['verified' => 1])->select(['name', 'email'])->order(['id' => 'desc'])->toList();
            
            foreach($datas as $key => $value) {
                echo $value, "<br>";
            }

        }
        public function updateDataRegister() {
            $this->autoRender = false;
            $data = $this->table->get(4);
            $data->name = "updateName";
            $data->email = "updateName@gmail.com";
            $data->phone = "2384789342";

            $this->table->save($data);
        }
        public function deleteDateRegister(){
            $this->autoRender = false;
            $data = $this->table->get(6);

            $this->table->delete($data);
        }
        public function insertModel(){
            $this->autoRender = false;
            $fruitsObjQuery = $this->Fruits->query();
            $fruitsObjQuery->insert(['name', 'description'])->values([
                "name" => "Mango",
                "description" => "This is a Mango"
            ])->execute();
        }
        public function listPost(){
            $datas = $this->Tblposts->find()->toArray();

            foreach($datas as $item) {
                $categoryName = $this->Tblcategory->get($item['CategoryId']);
                $item['categoryName'] = $categoryName['CategoryName'];
            }
            // show datas
            $this->set('baseUrl', $this->baseUrl);
            $this->set('datas', $datas);

            if (isset($_SESSION['Auth']['User']['name'])) {
                $this->set("userName", $_SESSION['Auth']['User']['name']);
                $this->set("userImg", $_SESSION['Auth']['User']['img_path']);
            }
        }
        public function postDetail($id){
            $post = $this->Tblposts->get($id);
            $this->set('post', $post);
            $this->set('baseUrl', $this->baseUrl);
            $post['CategoryName'] = $this->Tblcategory->get($post['CategoryId'])['CategoryName'];
            $post['Subcategory'] = $this->Tblsubcategory->get($post['SubCategoryId'])['Subcategory'];
            
            if (isset($_SESSION['Auth']['User']['name'])) {
                $this->set("userName", $_SESSION['Auth']['User']['name']);
                $this->set("userImg", $_SESSION['Auth']['User']['img_path']);
            }
        
        }
        public function searchUser(){

            $this->viewBuilder()->setLayout('userlayout');
            $this->set('baseUrl', $this->baseUrl);
            $data = [];
            $sortBy = 'name';

            if (isset($_SESSION['data_l'])){
                $data = $_SESSION['data_l'];
            }

            if (isset($_SESSION['last_option'])){
                $sortBy = $_SESSION['last_option'];
            }

            if ($this->request->is('post')){
                $data = [];
                $myName = $this->request->getData('name');
                $myEmail = $this->request->getData('email');
                $myPhone = $this->request->getData('phone');
                $myAddress = $this->request->getData('address');
                $sortBy = $this->request->getData('sort-by');
                $status = $this->request->getData('status');
                $numberlogin = $this->request->getData('numberlogin');

                if (!empty($myName)){
                    $data['name'] = $myName;
                }
                if (!empty($myEmail)){
                    $data['email'] = $myEmail;
                }
                if (!empty($myPhone)){
                    $data['phone'] = $myPhone;
                }
                if (!empty($myAddress)){
                    $data['address'] = $myAddress;
                }
                if (!empty($numberlogin)){
                    $data['numoflogin'] = $numberlogin;
                }

                $data['verified'] = $status;
                $_SESSION['data_l'] = $data;
                $_SESSION['last_option'] = $sortBy;
            }
            
            $userTable = TableRegistry::get('Users');
            $datas =  $userTable->find('all')->where($data)->select(['name', 'phone', 'address'])->order(['id' => 'desc'])->toList();
            $this->paginate = [
                'limit'=>'2'
            ];
            $datas = $userTable->find('all')->where($data)->order([$sortBy => 'desc']);
            $datas = $this->paginate($datas);

            $this->set('users', $datas);
            $this->set('lastData', $data);    
            $this->set('lastSort', $sortBy);

            // Get the current time.
            // $time = Time::now();
            // dd($time);
            
        }

    }
?>