<?php

namespace Mohammerat\Press\Fields;

use Mohammerat\Press\MarkdownParser;

class Body extends FieldContract
{
  public static function process($type, $value, $data)
  {
    return [
      $type => MarkdownParser::parse($value)
    ];
  }
}
