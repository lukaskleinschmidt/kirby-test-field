<?php

return function($page, $model) {

  $options = array(
    'test-1' => 'Test 2',
    'test-2' => 'Test 2',
  );

  $form = new Kirby\Panel\Form(array(
    'test' => array(
      'label'    => 'Label',
      'type'     => 'checkboxes',
      'options'  => $options,
      'default'  => key($options),
      'required' => true,
      'readonly' => count($options) == 1 ? true : false,
      'icon'     => 'chevron-down',
    )
  ));

  $form->cancel($model);
  $form->buttons->submit->val(l('add'));

  return $form;

};
