<?php
/**
 * Tag cloud widget
 */

$num_items = $vars['entity']->num_items;

elgg_push_context('tags');
$options = array(
	'owner_guid' => elgg_get_page_owner_guid(),
	'threshold' => 1,
	'limit' => $num_items,
	'tag_name' => 'tags',
	'modified_time_lower' => time() - 86400,
);
echo elgg_view_tagcloud($options);
elgg_pop_context();
