<div class="container">
    <!-- List posts -->
    <div class="content">
        <div class="block-content">
            <div class="title">
                <h2><?=$post['PostTitle']?></h2>
            </div>
            <div class="small-text">
                <span class="title-bold">Category</span> : <a class="no-line" href="#"><?=$post['CategoryName']?></a> | <span class="title-bold">Sub Category</span> : <?=$post['Subcategory']?> <span class="title-bold">Posted on</span> <?=$post['PostingDate']?>
            </div>
            <hr>
            <img src="<?=$baseUrl?>webroot/img/<?= $post['PostImage']?>" alt="" srcset="">
            <?= $post['PostDetails']?>
        </div>
    </div>
</div>
