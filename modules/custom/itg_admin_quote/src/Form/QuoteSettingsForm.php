<?php

namespace Drupal\itg_admin_quote\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ContentEntityExampleSettingsForm.
 *
 * @package Drupal\itg_admin_quote\Form
 *
 * @ingroup itg_admin_quote
 */
class QuoteSettingsForm extends FormBase {
  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'itg_admin_quote_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Empty implementation of the abstract submit class.
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    return $this->redirect('entity.itg_admin_quote.collection');
    //$form_state->setRedirect('entity.itg_admin_quote.collection');
    //$form['contact_settings']['#markup'] = 'Settings form for ContentEntityExample. Manage field settings here.';
    //return $form;
  }

}
