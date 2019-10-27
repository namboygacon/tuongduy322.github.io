<a href="<?=
    $this->Url->build([
        "controller" => 'test',
        "action" => 'owt',
        '?' => ['user_name' => 'Andread Mead', 'pass' => '123456789']
    ]);
?>">Home>owt</a>
<h2>My name: <?= $name?></h2>
<h2>My Major: <?= $major?></h2>
<?php
    $this->Breadcrumbs->add ('Theme', ['controller' => 'theme', 'action' => 'index']);
    $this->Breadcrumbs->add('OWT', ['controller' => 'test', 'action' => 'owt']);
    $this->Breadcrumbs->add([
        ['title'=>'Title', 'url' => ['controller' => 'test', 'action' => 'index']],
        ['title' => 'Example', 'url' => ['controller' => 'theme', 'action' => 'index']]
    ]);
    $this->Breadcrumbs->setTemplates([
        'wrapper' => '<ol class="breadcrumb">{{content}}</ol>',
        'item' => '<li><a href="{{url}}">{{title}}</a></li>'
    ]);
    echo $this->Breadcrumbs->render();
    
    echo "<pre>";
    print_r($data);
    foreach($data as $key => $value) {
        echo $key, '=> ', $value, "</br>";
    }
    echo "<br>";
    echo "<pre>";
    print_r($channelProfile);
    echo "<br>";
    echo $count;
?>