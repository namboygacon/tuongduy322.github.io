<div class="container_">
    <!-- List posts -->
    <div class="content">
        <div class="block-content">
            <div class="title">
                <h2>Search User</h2>
            </div>
            <?= $this->form->create();?>
            <?php echo $this->Html->link('News', ['controller' => 'post','action'=>'list_post'], ['class'=>'btn btn-info']); ?>
            <div class="form-group">
                <?php if(!empty($lastData['name'])) : ?>
                    <?php echo $this->Form->control('name', ['class'=>'form-control', 'value' => $lastData['name']])?>
                <?php else : ?>
                    <?php echo $this->Form->control('name', ['class'=>'form-control'])?>
                <?php endif ?>
            </div>
            <div class="form-group">
                <?php if(!empty($lastData['email'])) : ?>
                    <?php echo $this->Form->control('email', ['class'=>'form-control', 'value' => $lastData['email']])?>
                <?php else : ?>
                    <?php echo $this->Form->control('email', ['class'=>'form-control'])?>
                <?php endif ?>
            </div>
            <div class="form-group">
                <?php if(!empty($lastData['phone'])) : ?>
                    <?php echo $this->Form->control('phone', ['class'=>'form-control', 'value' => $lastData['phone']])?>
                <?php else : ?>
                    <?php echo $this->Form->control('phone', ['class'=>'form-control'])?>
                <?php endif ?>
            </div>
            <div class="form-group">
                <?php if(!empty($lastData['address'])) : ?>
                    <?php echo $this->Form->control('address', ['class'=>'form-control', 'value' => $lastData['address']])?>
                <?php else : ?>
                    <?php echo $this->Form->control('address', ['class'=>'form-control'])?>
                <?php endif ?>
            </div>
            <div class="form-group">
                <?php if(!empty($lastData['numoflogin'])) : ?>
                    <?php echo $this->Form->control('numberlogin', ['class'=>'form-control', 'value' => $lastData['numoflogin']])?>
                <?php else : ?>
                    <?php echo $this->Form->control('numberlogin', ['class'=>'form-control'])?>
                <?php endif ?>
            </div>
            <select id="status" class="form-control mb-4" name="status">
                <option value='0'> No active</option>
                <option value='1'>Active</option>
            </select>
            <select id="is-male" class="form-control mb-4" name="ismale">
                <option value='0'> Female</option>
                <option value='1'>Male</option>
            </select>
            <div class="flex-inline">
                <div class="card-body">
                    <input type="submit" name="btn" value="Submit"/>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="block-content">
            <div class="title">
                <h2>List User</h2>
            </div>
            <select id="sel" class="form-control mb-4" name="sort-by" value='phone' data-user="<?= $lastSort ?>">
                <option>Name</option>
                <option value="email">Email</option>
                <option>Phone</option>
                <option>Address</option>
                <option value="numoflogin">Number login</option>
            </select>
            <?= $this->form->end();?>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Number Login</th>
                </tr>
                <?php foreach($users as $user) :?>
                <tr>
                    <td><?=  $user['name'] ?></td>
                    <?php if ($user['is_male'] == 1) : ?>
                        <td>Male</td>
                    <?php else : ?>
                        <td>Female</td>
                    <?php endif?>
                    <td><?=  $user['phone'] ?></td>
                    <td><?=  $user['email'] ?></td>
                    <td><?=  $user['address'] ?></td>
                    <?php if ($user['verified'] == 1) : ?>
                        <td>Active</td>
                    <?php else : ?>
                        <td>No active</td>
                    <?php endif?>
                    <td><?=  $user['numoflogin'] ?></td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>
<?php
$paginator = $this->Paginator->setTemplates([
    'number'=>'<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
    'current'=>'<li class="page-item active"><a href="{{url}}" class="page-link">{{text}}</a></li>',
    'first'=>'<li class="page-item"><a href="{{url}}" class="page-link">&laquo;</a></li>',
    'last'=>'<li class="page-item"><a href="{{url}}" class="page-link">&raquo;</a></li>',
    'prevActive'=>'<li class="page-item"><a href="{{url}}" class="page-link">&lt;</a></li>',
    'nextActive'=>'<li class="page-item"><a href="{{url}}" class="page-link">&gt;</a></li>'
]);
?>
<nav>
    <ul class="pagination">
        <?php
        echo $paginator->first();
        if($paginator->hasPrev()){
            echo $paginator->prev();
        }
        echo $paginator->numbers();
        if($paginator->hasNext()){
            echo $paginator->next();
        }
        echo $paginator->last();
        ?>
    </ul>
</nav>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

</style>
<script>
    
    // document.getElementById('sel').options[id].selected = true
    var lastOption = document.getElementById('sel');
    lastOption = lastOption.getAttribute('data-user');
 
    var val = "Phone";
    var sel = document.getElementById('sel');
    var opts = sel.options;
    for (var opt, j = 0; opt = opts[j]; j++) {
        if (opt.value == lastOption) {
        sel.selectedIndex = j;
        break;
        }
    }

</script>