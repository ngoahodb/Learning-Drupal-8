<?php
namespace Drupal\hello\Form;
use Drupal\Core\Form\FormBase;

class HelloForm extends FormBase {

  public function getFormId() {
    return 'hello_form';
  }

  public function buildForm(array $form, array &$form_state) {
    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Your name:')
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
    );
    return $form;
  }

  public function validateForm(array &$form, array &$form_state) {
    if ($form_state['values']['name'] == '') {
      $this->setFormError('name', $form_state, $this->t('The name is empty.'));
    }
  }

  public function submitForm(array &$form, array &$form_state) {
     drupal_set_message($this->t('Your name is @name.', array('@name' => $form_state['values']['name'])));
  }
}
