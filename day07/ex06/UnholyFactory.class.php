<?php
class UnholyFactory {
  private $_fighters = array();

  public function absorb($fighter) {
    if (get_parent_class($fighter) !== 'Fighter')
    {
      print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
    }
    else if (in_array($fighter, $this->_fighters))
    {
      print("(Factory already absorbed a fighter of type " . $fighter->getName() . ")" . PHP_EOL);
    }
    else
    {
      $this->_fighters[$fighter->getName()] = $fighter;
      print("(Factory absorbed a fighter of type " . $fighter->getName() . ")" . PHP_EOL);
    }
  }
  public function fabricate($fighter) {
    if (array_key_exists($fighter, $this->_fighters))
    {
      print("(Factory fabricates a fighter of type " . $fighter . ")" . PHP_EOL);
      return (clone $this->_fighters[$fighter]);
    }
    else
    {
      print("(Factory hasn't absorbed any fighter of type " . $fighter . ")" . PHP_EOL);
      return (null);
    }
  }
}
?>
