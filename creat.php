<?php
/**
* Basic Node Creation Example for Drupal 7
*
* This example:
* - Assumes a standard Drupal 7 installation
* - Does not verify that the field values are correct
*/
  $body_text = 'This is the body text I want entered with the node.';
  
  $node = new stdClass();
  $node->type = 'article';
  node_object_prepare($node);
  
  $node->title    = 'Node Created Programmatically on ' . date('c');
  $node->language = LANGUAGE_NONE;

  $node->body[$node->language][0]['value']   = $body_text;
  $node->body[$node->language][0]['summary'] = text_summary($body_text);
  $node->body[$node->language][0]['format']  = 'filtered_html';
  
  $path = 'content/programmatically_created_node_' . date('YmdHis');
  $node->path = array('alias' => $path);

  node_save($node);
?>

