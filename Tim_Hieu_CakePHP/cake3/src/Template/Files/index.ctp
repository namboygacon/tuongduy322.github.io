<p>
    <?php echo $this->Html->link('Upload File', ['action'=>'upload'],['class'=>'btn btn-primary']) ?>
</p>
<div class="row">
    <?php
    foreach($files as $file){
    ?>
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="<?php echo $file->path; ?>"/>
            <div class="card-body">
                <h4 class="card-title"><?php echo $file->name; ?></h4>
                <?php
                echo $this->Html->link('Download', ['action'=>'download', $file->id],['class'=>'btn btn-primary']);
                echo $this->Html->link('Delete', ['action'=>'delete', $file->id],['class'=>'btn btn-danger']);
                ?>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</div>