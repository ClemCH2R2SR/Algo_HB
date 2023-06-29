<?php


function applyHtml(string $text, string $style): string {

    switch ($style){
        case "italique":
            $tag = "em";
            break;
        case "gras":
            $tag = "strong";
            break;
        case "souligné":
            $tag = "u";
            break;
        default:
            $tag = "span";
    }

    // $tag = match ($style){
    //     ITALIQUE => "em",
    //     GRAS => "strong",
    //     SOULIGNE = "u",
    //     default => "span"
    // };

    return "<$tag>$text</$tag>";
}

applyHtml()

?>