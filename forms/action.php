<?php

return function($page, $model) {

  $options = array(
    'value-1' => 'Test 1',
    'value-2' => 'Test 2',
  );

  $form = new Kirby\Panel\Form(array(
    'test' => array(
      'label'    => 'Label',
      'type'     => 'checkboxes',
      'options'  => $options,
      'icon'     => 'chevron-down',
    )
  ));

  $form->cancel($model);
  $form->buttons->submit->val(l('add'));

  return $form;

};
