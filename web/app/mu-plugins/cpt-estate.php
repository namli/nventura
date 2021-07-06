<?php
/*
Plugin Name: CPT Nuria Ventura
Plugin URI:
Description: Agrega CPT al sitio de Nuria Ventura
Version: 1.0
Author: PSA
Author URI:
License: GLP2
License URI: https://www.gnu.org/licenses/gpl-2-0.html
Text Domain: nventura
*/



// ********************************************************
// ****************** - PROPIETAT ********************
// ********************************************************
add_action('init', 'crear_post_type_propietat', 0);

function crear_post_type_propietat()
{

	// Etiquetas para el Post Type
	$labels = array(
		'name'                => _x('Property', 'Post Type General Name', 'estate'),
		'singular_name'       => _x('Property', 'Post Type Singular Name', 'estate'),
		'menu_name'           => __('Property', 'estate'),
		'parent_item_colon'   => __('Property parent', 'estate'),
		'all_items'           => __('All Properties', 'estate'),
		'view_item'           => __('View Property', 'estate'),
		'add_new_item'        => __('Add new Property', 'estate'),
		'add_new'             => __('Add new Property', 'estate'),
		'edit_item'           => __('Edit Property', 'estate'),
		'update_item'         => __('Update Property', 'estate'),
		'search_items'        => __('Search Property', 'estate'),
		'not_found'           => __('Not found', 'estate'),
		'not_found_in_trash'  => __('Not found in trash', 'estate'),
	);

	// Otras opciones para el post type

	$args = array(
		'label'               => __('property', 'estate'),
		'description'         => __('Property description', 'estate'),
		'labels'              => $labels,
		// Todo lo que soporta este post type
		'supports'            => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions',),
		/* Un Post Type hierarchical es como las paginas y puede tener padres e hijos.
			* Uno sin hierarchical es como los posts
			*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-awards',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	// Por ultimo registramos el post type
	register_post_type('property', $args);
}

// **********************CREAMOS TAXONOMIA TIPUS

add_action('init', 'taxonomia_tipus');

function taxonomia_tipus()
{
	$labels = array(
		'name'              => _x('Types', 'taxonomy general name'),
		'singular_name'     => _x('Type', 'taxonomy singular name'),
		'search_items'      => __('Search Type of property'),
		'all_items'         => __('All Types', 'estate'),
		'parent_item'       => __('Types'),
		'parent_item_colon' => __('Types pare:'),
		'edit_item'         => __('Edit types of property'),
		'update_item'       => __('Update types of property'),
		'add_new_item'      => __('Add new types propierty'),
		'new_item_name'     => __('New type of propierty'),
		'menu_name'         => __('Property types'),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest' => true,
		'rewrite' => array('slug' => 'proptypes')
	);

	register_taxonomy('proptypes', array('property'), $args);
}



// ***********************CREAMOS TAXONOMIA ACCIO
add_action('init', 'taxonomia_accio');

function taxonomia_accio()
{
	$labels = array(
		'name'              => _x('Action', 'taxonomy general name'),
		'singular_name'     => _x('Action', 'taxonomy singular name'),
		'search_items'      => __('Search action'),
		'all_items'         => __('Actions', 'estate'),
		'parent_item'       => __('Type of action'),
		'parent_item_colon' => __('Type of action pare:'),
		'edit_item'         => __('Edit action'),
		'update_item'       => __('Update action'),
		'add_new_item'      => __('Add new Action'),
		'new_item_name'     => __('New action'),
		'menu_name'         => __('Action of property'),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest' => true,
		'rewrite' => array('slug' => 'action')
	);

	register_taxonomy('action', array('property'), $args);
}

// ******************CREAMOS TAXONOMIA CARACTERISTICAS PROPIETAT
add_action('init', 'taxonomia_caracteristiques');

function taxonomia_caracteristiques()
{
	$labels = array(
		'name'              => _x('Characteristic', 'taxonomy general name'),
		'singular_name'     => _x('Characteristic', 'taxonomy singular name'),
		'search_items'      => __('Search characteristics'),
		'all_items'         => __('All characteristics'),
		'parent_item'       => __('Characteristic'),
		'parent_item_colon' => __('Characteristic parent:'),
		'edit_item'         => __('Edit characteristic'),
		'update_item'       => __('Update characteristic'),
		'add_new_item'      => __('Add new characteristic'),
		'new_item_name'     => __('New characteristic'),
		'menu_name'         => __('Characteristics of property'),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest' => true,
		'rewrite' => array('slug' => 'characteristic'),
	);

	register_taxonomy('characteristic', array('property'), $args);
}

// ******************CREAMOS TAXONOMIA LLOC DE LA PROPIETAT
add_action('init', 'taxonomia_zona');

function taxonomia_zona()
{
	$labels = array(
		'name'              => _x('Zona', 'taxonomy general name'),
		'singular_name'     => _x('Zones', 'taxonomy singular name'),
		'search_items'      => __('Search zona'),
		'all_items'         => __('Locations', 'estate'),
		'parent_item'       => __('Zona'),
		'parent_item_colon' => __('Zona parent:'),
		'edit_item'         => __('Edit zona'),
		'update_item'       => __('Update zona'),
		'add_new_item'      => __('Add new zona'),
		'new_item_name'     => __('New zona'),
		'menu_name'         => __('Zona of location'),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'query_var'         => true,
		'rewrite' => array('slug' => 'zona'),
	);

	register_taxonomy('zona', array('property'), $args);
}

// ***************CREAMOS TAXONOMIA habitacions
add_action('init', 'taxonomia_habitacions');

function taxonomia_habitacions()
{
	$labels = array(
		'name'              => _x('Rooms', 'taxonomy general name'),
		'singular_name'     => _x('Rooms', 'taxonomy singular name'),
		'search_items'      => __('Search rooms'),
		'all_items'         => __('All Rooms'),
		'parent_item'       => __('Parent room'),
		'parent_item_colon' => __('Parent room:'),
		'edit_item'         => __('Edit room'),
		'update_item'       => __('Update room'),
		'add_new_item'      => __('Add new room'),
		'new_item_name'     => __('New Rooms'),
		'menu_name'         => __('Number of Rooms'),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest' => true,
		'rewrite' => array('slug' => 'rooms'),
	);

	register_taxonomy('rooms', array('property'), $args);
}
// ***************CREAMOS TAXONOMIA habitacions
add_action('init', 'taxonomia_referencia');

function taxonomia_referencia()
{
	$labels = array(
		'name'              => _x('Referencia', 'taxonomy general name'),
		'singular_name'     => _x('Referencia', 'taxonomy singular name'),
		'search_items'      => __('Buscar Referencia'),
		'all_items'         => __('Totes les Referencies'),
		'parent_item'       => __('Referencies'),
		'parent_item_colon' => __('Referencia pare:'),
		'edit_item'         => __('Editar Referencia'),
		'update_item'       => __('Actualitzar característica'),
		'add_new_item'      => __('Agregar nova característica'),
		'new_item_name'     => __('Nova Referencia'),
		'menu_name'         => __('Referencia'),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest' => true,
		'rewrite' => array('slug' => 'referencia'),
	);

	register_taxonomy('referencia', array('property'), $args);
}
// ***************CREAMOS TAXONOMIA habitacions
add_action('init', 'taxonomia_precio');

function taxonomia_precio()
{
	$labels = array(
		'name'              => _x('Price', 'taxonomy general name'),
		'singular_name'     => _x('Price', 'taxonomy singular name'),
		'search_items'      => __('Search Price'),
		'all_items'         => __('All Prices'),
		'parent_item'       => __('Price'),
		'parent_item_colon' => __('Price pare:'),
		'edit_item'         => __('Edit Price'),
		'update_item'       => __('Update Price'),
		'add_new_item'      => __('Add Price'),
		'new_item_name'     => __('New Price'),
		'show_in_rest' => true,
		'menu_name'         => __('Prices'),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite' => array('slug' => 'price'),
	);

	register_taxonomy('price', array('property'), $args);
}
