<?php

namespace Mohammerat\Press\Fields;

use Mohammerat\Press\MarkdownParser;

class Body
{
  public static function process($type, $value)
  {
    return [
      $type => MarkdownParser::parse($value)
    ];
  }
}
