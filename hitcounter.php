<?php

class hitcounter {

    function allow_template($template) {
        $allow = false;

        switch ($template) {
            case 'account':
            case'activity':
            case'admin':
            case'ask' :
            case'categories' :
            case'custom' :
            case'favorites':
            case'feedback' :
            case'hot' :
            case'ip' :
            case'login':
            case'message':
            case'qa' :
            case'question':
            case'questions':
            case'register' :
            case'search' :
            case'tag' :
            case'tags' :
            case'unanswered':
            case'updates' :
            case'user' :
            case'users' :
                $allow = true;
                break;
        }

        return $allow;
    }

    function allow_region($region) {
        return ($region == 'full');
    }

    function output_widget($region, $place, $themeobject, $template, $request, $qa_content) {
        $themeobject->output('<div align="center">');
        $file = fopen('../hits.txt', 'r+');
        $current = fgets($file) + 1;
        rewind($file);
        fwrite($file, $current);
        fclose($file);
        echo "$current users served";
        $themeobject->output('</div>');
    }

}

