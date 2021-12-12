<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                     <?php
                        $personCartList = [
                            [
                            'avatar' => 'img/demo/authors/sunny.png', //Аватарка
                            'avatarAlt' => 'Sunny A.', //alt по аватарке
                            'title' => 'Sunny A. (UI/UX Expert)', //имя и специализация
                             'position' => 'Lead Author', //позиция
                             'hrefMedia' => 'https://twitter.com/@myplaneticket', //ссылка на соц. сеть
                             'hrefContact' => 'https://wrapbootstrap.com/user/myorange', //ссылка для связи
                             'linkTitle' => 'Contact Sunny', //title по ссылке для связи
                             'nickname' => '@myplaneticket', //nickname для связи
                            'status' => 'active'
                            ],

                            [
                            'avatar' => 'img/demo/authors/josh.png', //Аватарка
                            'avatarAlt' => 'Jos K.', //alt по аватарке
                            'title' => 'Jos K. (ASP.NET Developer)', //имя и специализация
                             'position' => 'Partner &amp; Contributor', //позиция
                             'hrefMedia' => 'https://twitter.com/@atlantez', //ссылка на соц. сеть
                             'hrefContact' => 'https://wrapbootstrap.com/user/Walapa', //ссылка для связи
                             'linkTitle' => 'Contact Jos', //title по ссылке для связи
                             'nickname' => '@atlantez', //nickname для связи
                            'status' => 'active'
                            ],

                            [
                            'avatar' => 'img/demo/authors/jovanni.png', //Аватарка
                            'avatarAlt' => 'Jovanni Lo', //alt по аватарке
                            'title' => 'Jovanni L. (PHP Developer)', //имя и специализация
                             'position' => 'Partner &amp; Contributor', //позиция
                             'hrefMedia' => 'https://twitter.com/@lodev09', //ссылка на соц. сеть
                             'hrefContact' => 'https://wrapbootstrap.com/user/lodev09', //ссылка для связи
                             'linkTitle' => 'Contact Jovanni', //title по ссылке для связи
                             'nickname' => '@lodev09', //nickname для связи
                            'status' => 'banned'
                            ],
                            [
                            'avatar' => 'img/demo/authors/roberto.png', //Аватарка
                            'avatarAlt' => 'Roberto R.', //alt по аватарке
                            'title' => 'Roberto R. (Rails Developer)', //имя и специализация
                             'position' => 'Partner &amp; Contributor', //позиция
                             'hrefMedia' => 'https://twitter.com/@sildur', //ссылка на соц. сеть
                             'hrefContact' => 'https://wrapbootstrap.com/user/sildur', //ссылка для связи
                             'linkTitle' => 'Contact Roberto', //title по ссылке для связи
                             'nickname' => '@sildur', //nickname для связи
                            'status' => 'banned'
                            ],
                        ];
                    ?>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <?php foreach($personCartList as $personCartItem): ?>
                            <div class="<?=$personCartItem['status'] == 'banned' ? 'banned' : ''; ?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?=$personCartItem['avatar'];?>" alt="<?=$personCartItem['avatarAlt'];?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?=$personCartItem['title'];?>
                                        <small class="m-0 fw-300">
                                            <?=$personCartItem['position'];?>
                                        </small>
                                    </h5>
                                    <a href="<?=$personCartItem['hrefMedia'];?>" class="text-info fs-sm" target="_blank"><?=$personCartItem['nickname'];?></a> -
                                    <a href="<?=$personCartItem['hrefContact'];?>" class="text-info fs-sm" target="_blank" title="<?=$personCartItem['linkTitle']?>"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
