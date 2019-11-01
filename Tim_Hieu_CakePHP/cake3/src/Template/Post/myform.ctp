<h4>Form in cakePHP</h4>
<?php
    echo $this->form->create(null, 
    [
        'url' => ["controller" => "online", "action" => "myformsubmit"], 
        'type'=> "file"
    ]);
    echo $this->form->text('abc_text', [
        'class'=> 'owt-class',
        'id' => 'owt-id',
        'value' => 'Enter your mail'
    ]);
    echo $this->form->file('file');
    echo $this->form->textarea('abc');
    echo $this->form->button('Submit');
    echo $this->form->end();
?>