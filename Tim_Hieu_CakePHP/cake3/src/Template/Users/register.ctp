<div class="row">
    <div class="col-md-6 offset-md-2">
        <?= $this->Flash->render() ?>
        <div class="card">
            <h3 class="card-header">Register</h3>
            <div class="card-body">
                <?php echo $this->Html->link('News', ['controller' => 'post','action'=>'list_post'], ['class'=>'btn btn-info mt-3']); ?>
                <?php echo $this->Form->create(null, ['enctype'=>'multipart/form-data']) ?>
                <div class="form-group">
                        <?php echo $this->Form->file('file') ?>
                    </div>
                <div class="form-group">
                    <?php echo $this->Form->control('name', ['class'=>'form-control', 'required'])?>
                </div>
                <select id="ismale" class="form-control mb-4" name="ismale">
                    <option value='0'> Female</option>
                    <option value='1'>Male</option>
                </select>
                <div class="form-group">
                    <?php echo $this->Form->control('address', ['class'=>'form-control', 'required'])?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->control('phone', ['class'=>'form-control', 'required'])?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->control('email', ['class'=>'form-control', 'required'])?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->control('password', ['class'=>'form-control', 'required'])?>
                </div>
                <?php
                    echo $this->Form->button('Register', ['class'=>'btn btn-primary']);
                    echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>
</div>
<style>
a.btn.btn-info.mt-3 {
    margin-left: 420px;
}
</style>