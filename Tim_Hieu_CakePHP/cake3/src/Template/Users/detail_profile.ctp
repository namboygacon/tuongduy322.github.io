<div class="row">
    <div class="col-md-6 offset-md-2">
        <div class="card">
            <h3 class="card-header">User Information</h3>
            <div class="card-body">
                <img src="<?=$baseUrl?>webroot/<?= $data['imgPath']?>" class="rounded mx-auto d-block" width="200" height="200"> 
                <?php echo $this->Form->create() ?>
                <div class="form-group d-none">
                    <?php echo $this->Form->control('id', ['class'=>'form-control', 'required', 'value' => $data['id']])?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->control('name', ['class'=>'form-control', 'required', 'value' => $data['name']])?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->control('email', ['class'=>'form-control', 'required', 'value' => $data['email']])?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->control('address', ['class'=>'form-control', 'required', 'value' => $data['address']])?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->control('phone', ['class'=>'form-control', 'required', 'value' => $data['phone']])?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->control('Last login', ['class'=>'form-control', 'value' => $data['lastlogin']])?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->control('Number login', ['class'=>'form-control', 'value' => $data['numlogin']])?>
                </div>
                <?php if ($data['verified'] == 1) : ?>
                    <div class="mb-3">
                        <span class="badge badge-success">Active</span>
                    </div>
                <?php endif ?>
                <?php
                    echo $this->Form->button('Save', ['class'=>'btn btn-primary save']);
                    echo $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout'], ['class' => 'btn btn-success']);
                    echo $this->Form->end();
                ?>
                <div class="del">
                    <a class="btn btn-danger mt-3" href="<?php echo $this->Url->build(['action'=>'deleteUser', $data['id']]) ?>"onclick="return confirm('Are you sure?')">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.del {
    margin-top: 11px;
}
button.btn.btn-primary.save {
    margin-right: 10px;
}
</style>