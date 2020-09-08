<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="fa/css/all.css">

    <!-- Icon -->
    <link rel="icon" href="https://misterhere.ga/wp-content/uploads/2020/07/cropped-logo-favicon-web-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://misterhere.ga/wp-content/uploads/2020/07/cropped-logo-favicon-web-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://misterhere.ga/wp-content/uploads/2020/07/cropped-logo-favicon-web-180x180.png" />
    <meta name="msapplication-TileImage" content="https://misterhere.ga/wp-content/uploads/2020/07/cropped-logo-favicon-web-270x270.png" />

    <title>Bio - Muhammad Ridho</title>
</head>
<?php
$data = [
    'btnMenu1' => [
        [
            'icon' => 'fab fa-instagram',
            'name' => '@thismr_',
            'link' => 'https://instagram.com/thismr_',
        ],
        [
            'icon' => 'fab fa-instagram',
            'name' => '@picmr_',
            'link' => 'https://instagram.com/picmr_',
        ],
        [
            'icon' => 'fab fa-line',
            'name' => '@thismr_',
            'link' => 'https://jing.ga/line',
        ],
        [
            'icon' => 'fab fa-youtube',
            'name' => 'YouTube',
            'link' => 'https://jing.ga/yt',
        ],
    ],
    'btnMenu2' => [
        [
            'icon' => 'fab fa-github',
            'name' => 'Github',
            'link' => 'https://github.com/thismr',
        ],
        [
            'icon' => 'fas fa-envelope',
            'name' => 'Email',
            'link' => 'mailto:mr@misterhere.ga',
        ],
        [
            'icon' => 'fas fa-user',
            'name' => 'About Me',
            'link' => 'https://mrhere.ga/ridho',
        ],
        [
            'icon' => 'fas fa-globe',
            'name' => 'Website',
            'link' => 'https://misterhere.ga',
        ],
    ],
    'btnLink' => [
        [
            'icon' => 'fas fa-globe',
            'name' => 'Google Drive Unlimited',
            'link' => 'http://gdrive.is-best.net',
        ],
    ]
];
?>

<body>
    <div class="container-fluid">
        <div class="row mx-1 my-5 m-sm-5">
            <div class="col-xs">
                <h2>Hi! Welcome ...</h2>
                <p>Muhammad Ridho's Bio</p>
            </div>
            <div class="col-xs"></div>
        </div>
        <div class="row mx-sm-4">
            <div class="col-sm">
                <div class="shadow p-3 mb-5 bg-white rounded-lg">
                    <div class="row m-3 mb-4">
                        <div class="col-sm"></div>
                        <div class="col-sm text-center">
                            <h2>Pinned Links</h2>
                        </div>
                        <div class="col-sm"></div>
                    </div>
                    <div class="row mx-2 my-3">
                        <?php foreach ($data['btnLink'] as $b) : ?>
                            <div class="col-sm text-center">
                                <a href="<?= $b['link'] ?>" target="_blank" class="text-decoration-none button-menu">
                                    <div class="shadow-sm p-3 mb-5 bg-white rounded-lg">
                                        <div class="row">
                                            <div class="col-sm"><i class="<?= $b['icon']; ?> fa-3x"></i></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm"><?= $b['name']; ?></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-sm-4">
            <div class="col-sm">
                <div class="shadow p-3 mb-5 bg-white rounded-lg">
                    <div class="row m-3 mb-5">
                        <div class="col-sm"></div>
                        <div class="col-sm text-center">
                            <h2>Contact</h2>
                        </div>
                        <div class="col-sm"></div>
                    </div>
                    <div class="row mx-2 my-3">
                        <?php foreach ($data['btnMenu1'] as $b) : ?>
                            <div class="col-sm text-center">
                                <a href="<?= $b['link'] ?>" target="_blank" class="text-decoration-none button-menu">
                                    <div class="shadow-sm p-3 mb-5 bg-white rounded-lg">
                                        <div class="row">
                                            <div class="col-sm"><i class="<?= $b['icon']; ?> fa-3x"></i></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm"><?= $b['name']; ?></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="row mx-2">
                        <?php foreach ($data['btnMenu2'] as $b) : ?>
                            <div class="col-sm text-center">
                                <a href="<?= $b['link'] ?>" target="_blank" class="text-decoration-none button-menu">
                                    <div class="shadow-sm p-3 mb-5 bg-white rounded-lg">
                                        <div class="row-sm">
                                            <div class="col-sm"><i class="<?= $b['icon']; ?> fa-3x"></i></div>
                                        </div>
                                        <div class="row-sm mt-3">
                                            <div class="col-sm"><?= $b['name']; ?></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>