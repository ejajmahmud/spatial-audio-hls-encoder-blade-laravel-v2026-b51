<?php
declare(strict_types=1);

header('Content-Type: application/json');
echo json_encode([
    'app' => 'spatial-audio-hls-encoder-blade-laravel-v2026-b51',
    'category' => 'Spatial Audio Streaming & HLS Encoder',
    'tech' => 'PHP 8.3 / Laravel 11 & Blade UI',
    'status' => 'OPERATIONAL',
    'timestamp' => time()
]);
