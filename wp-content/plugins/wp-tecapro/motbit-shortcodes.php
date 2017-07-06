<?php

//////////////////////////////////////////////////////////////////
// Raw Shortcode
//////////////////////////////////////////////////////////////////
function my_formatter($content) {
    $new_content = '';
    $pattern_full = '{(\[raw\].*?\[/raw\])}is';
    $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
    $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

    foreach ($pieces as $piece) {
        if (preg_match($pattern_contents, $piece, $matches)) {
            $new_content .= $matches[1];
        } else {
            $new_content .= $piece;
        }
    }
    
    $title = get_the_title();

    return motbit_format($new_content,$title);
}

#remove_filter('the_content', 'wpautop');
#remove_filter('the_content', 'wptexturize');

add_filter('the_content', 'my_formatter', 99);

//////////////////////////////////////////////////////////////////
// Youtube shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('youtube', 'shortcode_youtube');
    function shortcode_youtube($atts) {
        $atts = shortcode_atts(
            array(
                'id' => '',
                'width' => 620,
                'height' => 360
            ), $atts);
        
            return '<div class="video-shortcode"><iframe title="LamTheNao.com | Youtube Player" width="' . $atts['width'] . '" height="' . $atts['height'] . '" src="http://www.youtube.com/embed/' . $atts['id'] . '" frameborder="0" allowfullscreen></iframe></div>';
    }
    
//////////////////////////////////////////////////////////////////
// Vimeo shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('vimeo', 'shortcode_vimeo');
    function shortcode_vimeo($atts) {
        $atts = shortcode_atts(
            array(
                'id' => '',
                'width' => 620,
                'height' => 360
            ), $atts);
        
            return '<div class="video-shortcode"><iframe src="http://player.vimeo.com/video/' . $atts['id'] . '" width="' . $atts['width'] . '" height="' . $atts['height'] . '" frameborder="0"></iframe></div>';
    }
    
//////////////////////////////////////////////////////////////////
// SoundCloud shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('soundcloud', 'shortcode_soundcloud');
    function shortcode_soundcloud($atts) {
        $atts = shortcode_atts(
            array(
                'url' => '',
                'width' => '100%',
                'height' => 81,
                'comments' => 'true',
                'auto_play' => 'true',
                'color' => 'ff7700',
            ), $atts);
        
            return '<object height="' . $atts['height'] . '" width="' . $atts['width'] . '"><param name="movie" value="http://player.soundcloud.com/player.swf?url=' . urlencode($atts['url']) . '&amp;show_comments=' . $atts['comments'] . '&amp;auto_play=' . $atts['auto_play'] . '&amp;color=' . $atts['color'] . '"></param><param name="allowscriptaccess" value="always"></param><embed allowscriptaccess="always" height="' . $atts['height'] . '" src="http://player.soundcloud.com/player.swf?url=' . urlencode($atts['url']) . '&amp;show_comments=' . $atts['comments'] . '&amp;auto_play=' . $atts['auto_play'] . '&amp;color=' . $atts['color'] . '" type="application/x-shockwave-flash" width="' . $atts['width'] . '"></embed></object>';
    }
    
//////////////////////////////////////////////////////////////////
// Button shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('button', 'shortcode_button');
    function shortcode_button($atts, $content = null) {
        $atts = shortcode_atts(
            array(
                'color' => 'black',
                'link' => '#',
                'target' => '',
            ), $atts);
        
            return '[raw]<span class="button ' . $atts['color'] . '"><a href="' . $atts['link'] . '" target="' . $atts['target'] . '">' .do_shortcode($content). '</a></span>[/raw]';
    }
    
//////////////////////////////////////////////////////////////////
// Dropcap shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('dropcap', 'shortcode_dropcap');
    function shortcode_dropcap( $atts, $content = null ) {  
        
        return '<span class="dropcap">' .do_shortcode($content). '</span>';  
        
}
    
//////////////////////////////////////////////////////////////////
// Highlight shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('highlight', 'shortcode_highlight');
    function shortcode_highlight($atts, $content = null) {
        $atts = shortcode_atts(
            array(
                'color' => 'yellow',
            ), $atts);
            
            if($atts['color'] == 'black') {
                return '<span class="highlight2">' .do_shortcode($content). '</span>';
            } else {
                return '<span class="highlight1">' .do_shortcode($content). '</span>';
            }

    }
    
//////////////////////////////////////////////////////////////////
// Check list shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('checklist', 'shortcode_checklist');
    function shortcode_checklist( $atts, $content = null ) {
    
    $content = str_replace('<ul>', '<ul class="checklist">', do_shortcode($content));
    
    return $content;
    
}

//////////////////////////////////////////////////////////////////
// Bad list shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('badlist', 'shortcode_badlist');
    function shortcode_badlist( $atts, $content = null ) {
    
    $content = str_replace('<ul>', '<ul class="badlist">', do_shortcode($content));
    
    return $content;
    
}

//////////////////////////////////////////////////////////////////
// Cross list shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('crosslist', 'shortcode_crosslist');
    function shortcode_crosslist( $atts, $content = null ) {
    
    $content = str_replace('<ul>', '<ul class="crosslist">', do_shortcode($content));
    
    return $content;
    
}


//////////////////////////////////////////////////////////////////
// Arrow list shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('arrowlist', 'shortcode_arrowlist');
    function shortcode_arrowlist( $atts, $content = null ) {
    
    $content = str_replace('<ul>', '<ul class="arrowlist">', do_shortcode($content));
    
    return $content;
    
}


//////////////////////////////////////////////////////////////////
// Tabs shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('tabs', 'shortcode_tabs');
    function shortcode_tabs( $atts, $content = null ) {
    extract(shortcode_atts(array(
    ), $atts));

    $out = '[raw]<div class="tabs-wrapper">[/raw]';
    
    $out .= '<ul class="tabs">';
    foreach ($atts as $key => $tab) {
        $out .= '<li><a href="#' . $key . '">' . $tab . '</a></li>';
    }
    $out .= '</ul>';
    
    $out .= '<div class="tabs_container">';

    $out .= do_shortcode($content) .'[raw]</div></div>[/raw]';
    
    return $out;
}

add_shortcode('tab', 'shortcode_tab');
    function shortcode_tab( $atts, $content = null ) {
    extract(shortcode_atts(array(
    ), $atts));
    
    $out = '[raw]<div id="tab' . $atts['id'] . '" class="tab_content">[/raw]' . do_shortcode($content) .'</div>';
    
    return $out;
}

 add_shortcode('tipw', 'shortcode_tipw');
    function shortcode_tipw( $atts, $content = null ) {
     extract(shortcode_atts(array(
        'type'      => '',
    ), $atts));

    $out = '[raw]<li class="icon-' . $type . 's">[/raw]'; 
    
    if($type == 'tip') {
        $out .= '<div class="tipIcon"></div>';  
    } else {
        $out .= '<div class="warningIcon"></div>';  
    }
    
    $out .= '<p>' . do_shortcode($content) .'[raw]</p></li>[/raw]';
    
    return $out;
}


//////////////////////////////////////////////////////////////////
// Toggle shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('toggle', 'shortcode_toggle');
    function shortcode_toggle( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'title'      => '',
    ), $atts));
    
    $out = '<h5 class="toggle"><a href="javascript:void()">' .$title. '</a></h5>';
    $out .= '<div class="toggle-content">';
    $out .= '<div class="block">';
    $out .= do_shortcode($content);
    $out .= '</div>';
    $out .= '</div>';
    
   return $out;
}
    
//////////////////////////////////////////////////////////////////
// Column one_half shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('one_half', 'shortcode_one_half');
    function shortcode_one_half($atts, $content = null) {
        $atts = shortcode_atts(
            array(
                'last' => 'no',
            ), $atts);
            
            if($atts['last'] == 'yes') {
                return '<div class="one_half last">' .do_shortcode($content). '</div><div class="clearboth"></div>';
            } else {
                return '<div class="one_half">' .do_shortcode($content). '</div>';
            }

    }
    
//////////////////////////////////////////////////////////////////
// Column one_third shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('one_third', 'shortcode_one_third');
    function shortcode_one_third($atts, $content = null) {
        $atts = shortcode_atts(
            array(
                'last' => 'no',
            ), $atts);
            
            if($atts['last'] == 'yes') {
                return '<div class="one_third last">' .do_shortcode($content). '</div><div class="clearboth"></div>';
            } else {
                return '<div class="one_third">' .do_shortcode($content). '</div>';
            }

    }
    
//////////////////////////////////////////////////////////////////
// Column two_third shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('two_third', 'shortcode_two_third');
    function shortcode_two_third($atts, $content = null) {
        $atts = shortcode_atts(
            array(
                'last' => 'no',
            ), $atts);
            
            if($atts['last'] == 'yes') {
                return '<div class="two_third last">' .do_shortcode($content). '</div><div class="clearboth"></div>';
            } else {
                return '<div class="two_third">' .do_shortcode($content). '</div>';
            }

    }
    
//////////////////////////////////////////////////////////////////
// Column one_fourth shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('one_fourth', 'shortcode_one_fourth');
    function shortcode_one_fourth($atts, $content = null) {
        $atts = shortcode_atts(
            array(
                'last' => 'no',
            ), $atts);
            
            if($atts['last'] == 'yes') {
                return '<div class="one_fourth last">' .do_shortcode($content). '</div><div class="clearboth"></div>';
            } else {
                return '<div class="one_fourth">' .do_shortcode($content). '</div>';
            }

    }
    
//////////////////////////////////////////////////////////////////
// Column three_fourth shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('three_fourth', 'shortcode_three_fourth');
    function shortcode_three_fourth($atts, $content = null) {
        $atts = shortcode_atts(
            array(
                'last' => 'no',
            ), $atts);
            
            if($atts['last'] == 'yes') {
                return '<div class="three_fourth last">' .do_shortcode($content). '</div><div class="clearboth"></div>';
            } else {
                return '<div class="three_fourth">' .do_shortcode($content). '</div>';
            }

    }
