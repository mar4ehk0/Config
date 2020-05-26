<?php

namespace Marchenko;

class Config
{
  // This variable contains full path to file
  // /path/to/file/filename
  protected $path_to_file;

  public function __construct(string $path) {
    $this->path_to_file = $path;
  }

  protected function getParam(string $paramName) {
    $file = parse_ini_file($this->path_to_file, FALSE, INI_SCANNER_TYPED);
    if (empty($file)) {
      return FALSE;
    }

    // TODO add processing varible with value NULL
    if (!isset($file[$paramName])) {
      return FALSE;
    }

    return $file[$paramName];
  }
}
