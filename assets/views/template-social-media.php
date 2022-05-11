<?php  $html = ''; 

if( is_array($outlet) ){

    $html .= '<li><a href="' . $outlet['url'] . '" target="_blank"><i class="fa fa-fw fa-' . $outlet['name'] . '"></i></a></li>';

}

return $html;