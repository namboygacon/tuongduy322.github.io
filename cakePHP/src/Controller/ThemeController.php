<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;

class ThemeController extends AppController {
    
    public $baseUrl = '';

    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('themelayout');
        $this->baseUrl = Router::url('/', true);
        // fix lỗi webrootController not found: tạo 1 tên miền ảo trỏ tới thư mục gốc
    }
    public function index(){
        $title = "Theme - index";
        $this->set(compact('title'));
        $this->set('baseUrl', $this->baseUrl);
    }
}
?>