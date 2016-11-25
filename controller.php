<?php

class TestFieldController extends Kirby\Panel\Controllers\Field {

  public function action() {

    dump($this->field()->value());

    $self   = $this;
    $parent = $this->model()->page();

    if($parent->ui()->create() === false) {
      throw new PermissionsException();
    }

    $form = $this->form('action', array($parent, $this->model()), function($form) use($parent, $self) {

      try {

        $form->validate();

        if(!$form->isValid()) {
          throw new Exception(l('pages.add.error.template'));
        }

      } catch(Exception $e) {
        $self->alert($e->getMessage());
      }

    });

    return $this->modal('action', compact('form'));

  }

}
