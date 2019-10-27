<?php
    namespace App\Controller;
    use App\Controller\AppController;
    use Cake\Routing\Router;
    use Cake\Datasource\ConnectionManager;
    use Cake\ORM\TableRegistry;

    class TestController extends AppController {

        public $url = '';
        private $connection;
        private $table;

        public function initialize () {
            parent::initialize();
            $this->viewBuilder()->setLayout('owtlayout');
            $this->url = Router::url('/contact-us/a/b', true);
            $this->connection = ConnectionManager::get('default');
            $this->table = TableRegistry::get("employees");
            $this->loadModel('Fruits'); // loaded model
        }

        public function index() {
            // $this->autoRender = false;
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
            // if ($this->request->is('post')) {
            //     echo "<pre>";
            //     print_r($this->request->getData());
            // }
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
            // $users = $this->connection->execute("SELECT * FROM employees WHERE id=:id", ['id' => 3])->fetchAll("assoc");
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
            // $datas = $this->table->find('all', [
            //     "conditions" => ["id" => 2]
            // ])->toArray();
            $id = 1;
            // $datas = $this->table->find('all')->where(["id" => $id])->toArray();
            
            $datas = $this->table->find('all')->select(['name', 'email'])->order(['id' => 'desc'])->toList();
            
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
            
            // $fruitsObj = $this->Fruits->newEntity();
            // $fruitsObj['name'] = 'Coconut';
            // $fruitsObj['description'] = "This is an Coconut";
            // $this->Fruits->save($fruitsObj);

            $fruitsObjQuery = $this->Fruits->query();
            $fruitsObjQuery->insert(['name', 'description'])->values([
                "name" => "Mango",
                "description" => "This is a Mango"
            ])->execute();
        }
    }
?>