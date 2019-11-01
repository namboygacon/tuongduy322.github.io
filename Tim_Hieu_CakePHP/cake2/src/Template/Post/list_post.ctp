<!-- List posts -->
<div class="content">
    <?php foreach ($datas as $item): ?>
    <div class="item-1">
    <img src="<?=$baseUrl?>webroot/img/<?= $item['PostImage']?>" alt="" srcset="">
        <div class="card-body">
            <h2 class="title">
                <?= $item['PostTitle']?>
            </h2>
            <p class="small-text">
                <span class="category">Category :</span> <span class="link"><?= $item['categoryName']?></span>
            </p>
            <div class="button">
                <a href="/post_detail/<?=$item['id']?>">Read More</a>
            </div>
        </div>
        <div class="card-footer">
            Posted on 2018-07-01 02:11:44
        </div>
    </div>
    <?php endforeach; ?>
</div>