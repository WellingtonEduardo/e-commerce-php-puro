<?php

declare(strict_types=1);

if (!function_exists('basePath')) {
    function basePath(string $path = ''): string
    {
        return dirname(__DIR__) . '/' . $path;
    }

}


if (!function_exists('mix')) {
    function mix(string $path)
    {

        if (!file_exists(basePath('public/mix-manifest.json'))) {
            throw new RuntimeException('The Mix manifest does not exist.');
        }


        $content = file_get_contents(__DIR__ . '/../public/mix-manifest.json');
        $content = json_decode($content, true);

        return $content[$path] ?? '';
    }
}