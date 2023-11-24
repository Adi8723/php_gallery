<?php
require_once __DIR__ . '/inc/all.php';
$galaryImageRepository = new GalaryImagesRepository($pdo);

$images = $galaryImageRepository->fetchAll();

render(__DIR__ . '/views/index.view.php', [
    'images' => $images,
]);
