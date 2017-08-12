<?php

$dom = new DOMDocument;
$internalErrors = libxml_use_internal_errors(true);
$dom->loadHTML(file_get_contents('https://www.epam.com/about'));

$svgElements = $dom->getElementsByTagName('svg');
$imgElements = $dom->getElementsByTagName('img');

$svgInImage = (svgInImgCounter($imgElements));
echo "SVG files in special svg tag: $svgElements->length. SVG files in img tag: $svgInImage";

function svgInImgCounter($imgElements)
{
    $svgCounter = 0;
    foreach ($imgElements as $imgElement) {
        if (strpos($imgElement->getAttribute('src'), 'svg')) {
            $svgCounter++;
        }
    }
    return $svgCounter;
}

