<?php

trait Validator {
  private function validateDate($expDate){
    if (!isset($expDate) || strlen(trim($expDate)) === 0 || !is_string($expDate)) {
        throw new Exception("");
      }

}

}

?>