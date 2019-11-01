<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;
use Cake\Utility\Security;
use Cake\Mailer\Email;


class UsersController extends AppController {

    public $baseUrl = '';

    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setLayout('userlayout');
        $this->baseUrl = Router::url('/', true);
    }

    public function index(){

    }

    public function forgotpassword(){
        if($this->request->is('post')){
            $myemail = $this->request->getData('email');
            $mytoken = Security::hash(Security::randomBytes(25));

            $userTable = TableRegistry::get('Users');
            $user = $userTable->find('all')->where(['email'=>$myemail])->first();
            $user->password = '';
            $user->token = $mytoken;
            $link = "http://newsportal.com:8080/users/resetpassword/$mytoken";
            
            if($userTable->save($user)){
                $this->Flash->success('Reset password link has been sent to your email ('.$myemail.'), please open your inbox');

                $email = new Email('default');
                $email->setEmailFormat('html');
                $email->setFrom(['tuongduy322@gmail.com' => 'http://newsportal.com:8080'])
                    ->setTo($myemail)
                    ->setSubject('Please confirm your reset password')
                    ->send('<a href="' . $link . '">Verification</a>');
            }
        }
    }

    public function resetpassword($token){
        if($this->request->is('post')){
            $hasher = new DefaultPasswordHasher();
            $mypass = $hasher->hash($this->request->getData('password'));

            $userTable = TableRegistry::get('Users');
            $user = $userTable->find('all')->where(['token'=>$token])->first();
            $user->password = $mypass;

            if($userTable->save($user)){

                return $this->redirect(['action'=>'login']);
            }
        }
    }

    public function login() {
        if ($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user) {
                $this->Auth->setUser($user);

                $userTable = TableRegistry::get('users');
                $userLogin = $userTable->get($user['id']);
                $userLogin->numoflogin = $user['numoflogin'] + 1;
                if (!$userTable->save($userLogin)){
                    dd('err');
                }
                
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error('Your email password incorrect');
            }
        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    public function list(){
        $this->autoRender = false;
        $userTable = TableRegistry::get('users');
        $users = $userTable->find('all')->toList();
    }
    public function register(){
        if ($this->request->is('post')) {
            $userTable = TableRegistry::get('users');
            $user = $userTable->newEntity();

            $hasher = new DefaultPasswordHasher();
            $myName = $this->request->getData('name');
            $myMail = $this->request->getData('email');
            $myPass = $this->request->getdata('password');
            $myAddress = $this->request->getData('address');
            $myPhone = $this->request->getdata('phone');
            $isMale = $this->request->getdata('ismale');
            $token = Security::hash(Security::randomBytes(32));
            
            $myimgname = $this->request->getData()['file']['name'];
            $mytmp = $this->request->getData()['file']['tmp_name'];
            $myext = substr(strrchr($myimgname, "."), 1);
            $mypath = "upload/".Security::hash($myimgname).".".$myext;

            $user->name = $myName;
            $user->is_male = $isMale;
            $user->address = $myAddress;
            $user->phone = $myPhone;
            $user->password = $hasher->hash($myPass);
            $user->email = $myMail;
            $user->token = $token;
            $user->img_name = $myimgname;
            $user->img_path = $mypath;
            $user->created_at = date('Y-m-d H:i:s');
            $user->updated_at = date('Y-m-d H:i:s');
            $link = "http://newsportal.com:8080/users/verification/$token";
            
            if(move_uploaded_file($mytmp, WWW_ROOT.$mypath)){
                if ($userTable->save($user)){
                    $this->Flash->set('Register successful, your confirmation email have been sent', ['element'=>'success']);
                   
                    $email = new Email('default');
                    $email->setEmailFormat('html');
                    $email->setFrom(['tuongduy322@gmail.com' => 'http://newsportal.com:8080'])
                        ->setTo($myMail)
                        ->setSubject('Please Confirm')
                        ->send('<a href="' . $link . '">Verification</a>');
                } else {
                    $this->Flash->set('Register fail, please try againt', ['element'=>'error']);
                }
            } else {
                $this->Flash->set('Register fail, please try againt', ['element'=>'error']);
            }
            
        }
        
    }

    public function verification($token){
        $userTable = TableRegistry::get('users');
        $verify = $userTable->find('all')->where(['token'=>$token])->first();
        $verify->verified = 1;

        $userTable->save($verify);
    }

    public function detailProfile(){
        if ($this->request->is('post')) {
            $myId = $this->request->getData('id');
            $myName = $this->request->getData('name');
            $myMail = $this->request->getData('email');
            $myAddress = $this->request->getData('address');
            $myPhone = $this->request->getdata('phone');
            
            $userTable = TableRegistry::get('users');
            $user = $userTable->get($myId);
            $user->name = $myName;
            $user->address = $myAddress;
            $user->phone = $myPhone;
            $user->email = $myMail;
            $user->created_at = date('Y-m-d H:i:s');
            $user->updated_at = date('Y-m-d H:i:s');

            if ($userTable->save($user)){
                $this->Flash->set('Edit successful, your confirmation email have been sent', ['element'=>'success']);
                $this->Auth->setUser($user);
                
                return $this->redirect(['controller'=>'Post', 'action'=>'listPost']);
            } else {
                $this->Flash->set('Edit fail, please try againt', ['element'=>'error']);
            }
        }
        $data = [
            'name' => $_SESSION['Auth']['User']['name'],
            'address' => $_SESSION['Auth']['User']['address'],
            'phone' => $_SESSION['Auth']['User']['phone'],
            'email' => $_SESSION['Auth']['User']['email'],
            'id' => $_SESSION['Auth']['User']['id'],
            'imgPath' => $_SESSION['Auth']['User']['img_path'],
            'verified' => $_SESSION['Auth']['User']['verified']
        ];

        $this->set('data', $data);
        $this->set('baseUrl', $this->baseUrl);
    }
    public function upload(){
        if($this->request->is('post')){
            $myname = $this->request->getData()['file']['name'];
            $mytmp = $this->request->getData()['file']['tmp_name'];
            $myext = substr(strrchr($myname, "."), 1);
            $mypath = "upload/".Security::hash($myname).".".$myext;
            $file = $this->Files->newEntity();
            $file->name = $myname;
            $file->path = $mypath;
            $file->created_at = date('Y-m-d H:i:s');
            if(move_uploaded_file($mytmp, WWW_ROOT.$mypath)){
                $this->Files->save($file);

                return $this->redirect(['action'=>'detail_profile']);
            }
        }
    }
    public function deleteUser($id){

        $userTable = TableRegistry::get('users');
        $user = $userTable->get($id);
        $this->logout();
        $userTable->delete($user);

        return $this->redirect(['controller'=>'post', 'action'=>'list_post']);
    }
}
?>