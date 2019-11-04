<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= $this->Html->css(['style_test.css'])?>
    <title>Document</title>
</head>
<body>
    <!-- Header -->
    <div class="nav">
        <div class="title">
            <img src="<?=$baseUrl?>webroot/img/logo.png" alt="" />
        </div>
        <div class="list">
            <ul>
                <!-- <li>About</li>
                <li>News</li> -->
                <li>
                    <div class="user">
                        <a href="/post/search_user">Search User</a>
                    </div>
                </li>
                <li>
                    <?php if (isset($userName)) : ?>
                        <div class="user">
                            <!-- <img src=""/> -->
                            <img src="<?=$baseUrl?>webroot/<?= $userImg?>" class="rounded mx-auto d-block" width="50" height="50">
                            <a href="/users/detail_profile" class="avatar"><?= $userName ?></a>
                        </div>
                    <?php else : ?>
                        <div class="user">
                            <!-- <img src=""/> -->
                            <a href="/users/login">Login</a>
                        </div>
                    <?php endif?>
                </li>
                <li>
                    <?php if (!isset($userName)) : ?>
                    <div class="user">
                            <a href="/users/register">Register</a>
                    </div>
                    <?php else : ?>
                    <!-- userImg -->
                    
                    <?php endif?>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <!-- List posts -->
        <?= $this->fetch('content')?>
        <!-- <div class="content">
            <div class="item-1">
                <img src="<?=$baseUrl?>webroot/img/7fdc1a630c238af0815181f9faa190f5.jpg" alt="" srcset="">
                <div class="card-body">
                    <h2 class="title">
                        Shah holds meeting with NE states leaders in Manipur
                    </h2>
                    <p class="small-text">
                        <span class="category">Category :</span> <span class="link">Politics</span>
                    </p>
                    <div class="button">
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="card-footer">
                    Posted on 2018-07-01 02:11:44
                </div>
            </div>
            <div class="item-1">
            <img src="<?=$baseUrl?>webroot/img/7fdc1a630c238af0815181f9faa190f5.jpg" alt="" srcset="">
                <div class="card-body">
                    <h2 class="title">
                        Shah holds meeting with NE states leaders in Manipur
                    </h2>
                    <p class="small-text">
                        <span class="category">Category :</span> <span class="link">Politics</span>
                    </p>
                    <div class="button">
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="card-footer">
                    Posted on 2018-07-01 02:11:44
                </div>
            </div>
        </div> -->
        <!-- Side bar -->
        <div class="side-bar">
            <div class="search-box">
                <h5 class="title card-header">
                    Search
                </h5>
                <div class="flex-inline">
                    <div class="card-body">
                        <input type="text" name="search" placeholder="Search for..."/>
                    </div>
                    <div class="button">
                        <a href="#">Go!</a>
                    </div>
                </div>
            </div>
            <div class="categories-box">
                <h5 class="title card-header">
                    Categories
                </h5>
                <div class="flex-inline">
                    <div class="card-body">
                        <ul>
                        <?php foreach($cats as $item) : ?>
                            <li><?=$item['CategoryName']?></li>
                            <!-- <li>Sports</li>
                            <li>Entertainment</li>
                            <li>Politics</li>
                            <li>Business</li> -->
                        <?php endforeach?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>