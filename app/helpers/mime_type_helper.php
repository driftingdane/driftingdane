<?php
/// Check the file uploaded is the right MIME type
/// FINFO_OPEN should be enabled on the server
function get_mime($file) {
    if (function_exists("finfo_file")) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension
        $mime = finfo_file($finfo, $file);
        finfo_close($finfo);
        return $mime;
    } else if (function_exists("mime_content_type")) {
        return mime_content_type($file);
    } else if (!stristr(ini_get("disable_functions"), "shell_exec")) {
        // http://stackoverflow.com/a/134930/1593459
        $file = escapeshellarg($file);
        $mime = shell_exec("file -bi " . $file);
        return $mime;
    } else {
        return false;
    }
}


function get_webp($pic) {
    if (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false || strpos($_SERVER['HTTP_USER_AGENT'], ' Chrome/') !== false) {
        $pic = str_replace([".jpg", ".png", ".jpeg"], ".webp", $pic);
        return $pic;
    }
    else {
        /// do nothing
    }
}


function check_for_webp_version($pic){

        $uriSegments = explode("/", parse_url($_GET['url'], PHP_URL_PATH));
        $cat_title = $uriSegments[3];

        switch (basename($_GET['url'])) {
            ///////////////// Case backend admin pages
            case $uriSegments[1]:
                $check_webp = $_SERVER['DOCUMENT_ROOT'] . '/public/storyImg/thumbs/' . get_webp($pic);
                if(file_exists($check_webp)) {
                   return get_webp($pic);
                }
            case $uriSegments[1]:
                $check_webp = $_SERVER['DOCUMENT_ROOT'] . '/public/photoImg/thumbs/' . get_webp($pic);
                if(file_exists($check_webp)) {
                    return get_webp($pic);
                }
            ///////////////// Case frontend pages
            case $uriSegments[3]:
                $check_webp = $_SERVER['DOCUMENT_ROOT'] . '/public/storyImg/mobile/' . get_webp($pic);
                $check_webp1 = $_SERVER['DOCUMENT_ROOT'] . '/public/storyImg/' . get_webp($pic);
                if(file_exists($check_webp)) {
                    return get_webp($pic);
                }
                if(file_exists($check_webp1)) {
                    return get_webp($pic);
                }

            case $uriSegments[0]:
                $check_webp = $_SERVER['DOCUMENT_ROOT'] . '/public/storyImg/feat/' . get_webp($pic);
                $check_webp1 = $_SERVER['DOCUMENT_ROOT'] . '/public/catImg/' . get_webp($pic);
                if(file_exists($check_webp)) {
                    return get_webp($pic);
                }
                if(file_exists($check_webp1)) {
                    return get_webp($pic);
                }

            case $uriSegments[3]:
                $check_webp_thumbs = $_SERVER['DOCUMENT_ROOT'] . '/public/photoImg/thumbs/' . get_webp($pic);
                $check_webp_mobile  = $_SERVER['DOCUMENT_ROOT'] . '/public/photoImg/mobile/' . get_webp($pic);
                $check_webp_large = $_SERVER['DOCUMENT_ROOT'] . '/public/photoImg/' . $cat_title . '/' . get_webp($pic);

                if(file_exists($check_webp_thumbs)) {
                    return get_webp($pic);
                }
                if(file_exists($check_webp_mobile)) {
                    return get_webp($pic);
                }
                if(file_exists($check_webp_large)) {
                    return get_webp($pic);
                }
            default:
                return $pic;
        }
    }


