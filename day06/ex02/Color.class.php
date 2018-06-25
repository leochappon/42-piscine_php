<?php
Class Color {
  public $red;
  public $green;
  public $blue;
  public static $verbose = False;

  public function __construct(array $kwargs)
  {
    if (isset($kwargs['red']) && isset($kwargs['green']) && isset($kwargs['blue']))
    {
      $this->red = intval($kwargs['red']);
      $this->green = intval($kwargs['green']);
      $this->blue = intval($kwargs['blue']);
    }
    else if (isset($kwargs['rgb']))
    {
      $this->red = intval(($kwargs['rgb'] >> 16) & 255);
      $this->green = intval(($kwargs['rgb'] >> 8) & 255);
      $this->blue = intval($kwargs['rgb'] & 255);
    }
    if (Self::$verbose)
    {
      printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
    }
  }

  public function __destruct()
  {
    if (Self::$verbose)
    {
      printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
    }
  }

  public function __toString()
  {
      return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
  }

  public static function doc()
  {
    return (file_get_contents('./Color.doc.txt'));
  }

  public function add($rhs)
  {
    return (new Color(array('red' => $this->red + $rhs->red,
    'green' => $this->green + $rhs->green,
    'blue' => $this->blue + $rhs->blue)));
  }

  public function sub($rhs)
  {
    return (new Color(array('red' => $this->red - $rhs->red,
    'green' => $this->green - $rhs->green,
    'blue' => $this->blue - $rhs->blue)));
  }

  public function mult($f)
  {
    return (new Color(array('red' => $this->red * $f,
    'green' => $this->green * $f,
    'blue' => $this->blue * $f)));
  }
}
?>
