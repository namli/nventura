<?php


if (!defined('ABSPATH')) {
  die('FU!');
}


function agency_fields_relationship_query($args, $field, $post_id)
{
  $user = wp_get_current_user();

  if (in_array('manager_of_agencies', (array) $user->roles)) {
    return $args;
  }

  if (in_array('agency', (array) $user->roles)) {
    $args['author'] = $user->ID;
    return $args;
  }


  return $args;
}
add_filter('acf/fields/relationship/query/key=field_61fe9e50450ff', 'agency_fields_relationship_query', 10, 3);
