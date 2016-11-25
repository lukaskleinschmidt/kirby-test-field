<?php

class TestField extends InputField {


  public function routes() {
    return array(
      array(
        'pattern' => 'action',
        'method'  => 'POST|GET',
        'action'  => 'action',
        'filter'  => 'auth',
      ),
    );
  }


  public function content() {
    return parent::content() . '<a href="' . purl($this->model(), implode('/', array(
      'field',
      $this->name(),
      'test',
      'action'
    ))) . '" data-modal>action</a>';
  }

}
