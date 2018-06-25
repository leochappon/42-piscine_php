<?php
class NightsWatch {
  private $_fighters = array();

  public function recruit($recruit) {
    if ($recruit instanceof IFighter) {
      $this->_fighters[] = $recruit;
    }
  }
  public function fight() {
    foreach ($this->_fighters as $value) {
      $value->fight();
    }
  }
}
?>
