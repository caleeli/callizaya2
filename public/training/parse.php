<?php

use League\HTMLToMarkdown\HtmlConverter;

require __DIR__ . '/../../vendor/autoload.php';

ini_set('display_errors', 1);

$url = "https://laravel.com/docs/11.x";
$path = parse_url($url, PHP_URL_PATH);
$host = parse_url($url, PHP_URL_SCHEME) . '://' . parse_url($url, PHP_URL_HOST);

function getPage($url, $basePath)
{
    $cacheFile = __DIR__ . '/.cache/' . md5($url) . '.html';
    if (file_exists($cacheFile)) {
        $html = file_get_contents($cacheFile);
    } else {
        $html = file_get_contents($url);
        file_put_contents($cacheFile, $html);
    }

    $html = str_replace('<div class="line">', '<div class="line">' . "\n", $html);
    // Get links
    $links = [];
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $anchors = $dom->getElementsByTagName('a');
    foreach ($anchors as $anchor) {
        $href = $anchor->getAttribute('href');
        // if starts with $bassURL
        if (strpos($href, $basePath) === 0) {
            $links[] = $href;
        }
    }

    // Get first section content
    $section = $dom->getElementsByTagName('section')->item(0);
    $content = $dom->saveHTML($section);

    // Replace the content of <code> tags with textContent
    $codeTags = $dom->getElementsByTagName('code');
    foreach ($codeTags as $codeTag) {
        $newContent = $codeTag->textContent;
        $newNode = $dom->createTextNode($newContent);
        $codeNode = $dom->createElement('code');
        $codeNode->appendChild($newNode);
        $codeTag->parentNode->replaceChild($codeNode, $codeTag);
    }
    $section = $dom->getElementsByTagName('section')->item(0);
    $contentMD = $dom->saveHTML($section);

    // Convert $content to markdown using league/html-to-markdown
    $converter = new HtmlConverter();
    $markdown = $converter->convert($contentMD);

    return compact('content', 'links', 'html', 'markdown');
}

function navigate($url, $host, $path, array &$rendered, $renderMarkdown = false)
{
    if (in_array($url, $rendered)) {
        return false;
    }

    $response = getPage($url, $path);

    if ($renderMarkdown) {
        echo $response['markdown'];
    } else {
        if (empty($rendered)) {
            echo $response['html'];
        } else {
            echo $response['content'];
        }
    }

    $rendered[] = $url;
    foreach ($response['links'] as $link) {
        if (!in_array($link, $rendered)) {
            navigate($host . $link, $host, $path, $rendered, $renderMarkdown);
        }
    }
}

$rendered = [];
navigate($url, $host, $path, $rendered, true);
