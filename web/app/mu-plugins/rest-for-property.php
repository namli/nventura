<?php
if (!defined('ABSPATH')) {
  die('FU!');
}

/**
 * Grab latest post title by an author!
 *
 * @param array $data Options for the function.
 * @return string|null Post title for the latest,
 * or null if none.
 */
function property_geo($data)
{
  $out = array();
  $posts = new WP_Query(array(
    'post_type' => 'property'
  ));

  if (empty($posts)) {
    return new WP_Error('no_property', 'No property exist', array('status' => 404));
  }

  while ($posts->have_posts()) :
    $posts->the_post();
    // $map_field = Field\OpenStreetMap::get_instance();

    // // format_value() returns sanitized HTML
    // echo $map_field->format_value( $field['value'], null, acf_get_raw_field('geo') );

    $outpost = new stdClass();
    $outpost->title = get_the_title();
    $outpost->id = get_the_ID();
    $outpost->url = get_permalink();
    $outpost->image = get_the_post_thumbnail_url(get_the_ID(), 'nv-340x340-nc');
    $outpost->description = get_the_content();
    $outpost->geo = get_post_meta(get_the_ID(), 'geo', true);

    $out[] = $outpost;

  endwhile;

  wp_reset_postdata();
  // foreach ($posts as $key => $value) {
  //   $post = new stdClass();

  // }

  return $out;
}


add_action('rest_api_init', function () {
  register_rest_route('rest-for-property/v2', '/geo', array(
    'methods' => 'GET',
    'callback' => 'property_geo',
  ));
});
