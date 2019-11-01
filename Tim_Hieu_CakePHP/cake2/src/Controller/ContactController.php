<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

class ContactController extends AppController {     

    public function index(){
        $this->autoRender = false;

        $userName = "Phan Tường Duy";
        $email = new Email('default');
        $email->setFrom(['tuongduy322@gmail.com' => 'http://newsportal.com:8080'])
            ->setTo('15520170@gm.uit.edu.vn')
            ->setSubject('About')
            ->send('My message');

    }
}