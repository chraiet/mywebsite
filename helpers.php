<?php

/**
 *  HELPER FUNCTIONS.
 */

function get_domain()
{
  $domain = "http://mohamedchraiet.com/";
  return $domain;
}

function anchor($link, $text, $title, $extras)
{
  $domain = get_domain();
  $link = $domain . $link;

  $data = "<a href='{$link}'";

  //  Add custom title or default to text.
  if ($title || $title == "") {
    $data .= " title='{$title}'";
  } else {
    $data .= " title='{$text}'";
  }

  if (is_array($extras)) {
    foreach ($extras as $rule) {
      $data .= parse_extras($rule);
    }
  }

  if (is_string($extras)) {
    $data .= parse_extras($extras);
  }

  $data .= '>';
  $data .= $text;
  $data .= '</a>';

  return $data;
}

function img($src, $extras)
{
  $data = '<img';
  $data .= " src='{$src}'";

  if (is_array($extras)) {
    foreach ($extras as $rule) {
      $data .= parse_extras($rule);
    }
  }

  $data .= ' />';

  return $data;
}

function parse_extras($rule)
{
  //  An ID.
  if ($rule[0] == "#") {
    $id = substr($rule, 1, strlen($rule));
    $data = " id='{$id}'";
    return $data;
  }
  //  A class.
  if ($rule[0] == ".") {
    $class = substr($rule, 1, strlen($rule));
    $data = " class='{$class}'";
    return $data;
  }
  //  A target.
  if ($rule[0] == "_") {
    $data = " target='{$rule}'";
    return $data;
  }
}
