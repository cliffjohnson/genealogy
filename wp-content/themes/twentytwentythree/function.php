<?php
function add_iframe_title($iframe){
    if($iframe)
    {
        $attributes = 'title="Embedded Video"';
        $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

        return $iframe;
    }

    return false;
}

add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
function my_embed_oembed_html($html, $url, $attr, $post_id) {
  if($html)
  {
    return add_iframe_title($html);
  }
  return false;
}
?>