<?php
/**
 * @file
 * Theme settings file for Tatsu.
 *
 * Although Tatsu itself does not provide any settings, we use this file to
 * inform the user that the module supports color schemes if the Color module
 * is enabled.
 */
if (module_exists('color')) {
  $form['header'] = array(
    '#type'        => 'fieldset',
    '#title'       => t('Header Settings'),
    '#collapsible' => TRUE,
  );
  $fields = array(
    'header',
    'slogan',
    'titleslogan',
    'hovermenu',
    'menutoggle',
  );
  foreach ($fields as $field) {
    $form['header'][$field] = color_get_color_element('tatsu', $field, $form);
  }

  $form['general'] = array(
    '#type'        => 'fieldset',
    '#title'       => t('General Settings'),
    '#collapsible' => TRUE,
  );
  $fields = array(
    'bg',
    'text',
    'link',
    'borders',
    'formfocusborder',
  );
  foreach ($fields as $field) {
    $form['general'][$field] = color_get_color_element('tatsu', $field, $form);
  }

  $form['primary_tabs'] = array(
    '#type'        => 'fieldset',
    '#title'       => t('Tabs and Breadcrumb'),
    '#collapsible' => TRUE,
  );
  $fields = array(
    'primarytabs',
    'primarytabstext',
    'buttons',
  );
  foreach ($fields as $field) {
    $form['primary_tabs'][$field] = color_get_color_element('tatsu', $field, $form);
  }

  $form['footer'] = array(
    '#type'        => 'fieldset',
    '#title'       => t('Footer Settings'),
    '#collapsible' => TRUE,
  );
  $fields = array(
    'footerborder',
    'footer',
    'footertext',
  );
  foreach ($fields as $field) {
    $form['footer'][$field] = color_get_color_element('tatsu', $field, $form);
  }
} else {
  $form['color'] = array(
    '#markup' => '<p>'.t('This theme supports custom color palettes if the Color module is enabled on the <a href="!url">modules page</a>. Enable the Color module to customize this theme.', array('!url' => url('admin/modules'))).'</p>',
  );
}

function tatsu_form_system_theme_settings_alter(&$form, &$form_state) {
  $theme_name = $form['theme']['#value'];

  // @see _tatsu_css_class()
  $form_state['storage']['options'] = $options;
  $form['settings']['bodyclass'] = array(
    '#type' => 'value',
    '#value' => '',
  );
  $form['settings']['preview'] = array(
    '#type' => 'markup',
    '#markup' => file_get_contents($tatsu_path . '/preview.html'),
  );
  $form['#validate'][] = '_tatsu_css_class';
  // Custom css in a textarea.

  $form['advanced'] = array(
    '#type' => 'fieldset',
    '#title' => t('Advanced Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['advanced']['use_custom_css'] = array(
    '#type' => 'checkbox',
    '#title' => t('Add custom CSS'),
    '#default_value' => theme_get_setting('use_custom_css', $theme_name),
  );
  $form['advanced']['custom_css'] = array(
    '#type' => 'textarea',
    '#title' => t('Add your custom CSS rules'),
    '#description' => t('Note that you can not preview these rules here.'),
    '#default_value' => theme_get_setting('custom_css', $theme_name),
    '#rows' => 12,
    '#states' => array(
      'invisible' => array(
        ':input[name="use_custom_css"]' => array('checked' => FALSE),
      ),
    ),
  );

}

/**
 * Custom validation function to set a form item value.
 */
function _tatsu_css_class($form, &$form_state) {
  // Create a css body class from image.
  if (!empty($form_state['values']['image_url'])) {
    $options                           = $form_state['storage']['options'];
    $key                               = $form_state['values']['image_url'];
    $form_state['values']['bodyclass'] = $options[$key];
  }
  // Additionally save css file to disk.
  $theme_name = $form_state['values']['theme'];
  $filepath   = backdrop_realpath("public://{$theme_name}_custom.css");
  if ($form_state['values']['use_custom_css']) {
    $custom_css = strip_tags($form_state['values']['custom_css']);
    file_unmanaged_save_data($custom_css, $filepath, FILE_EXISTS_REPLACE);
    $form_state['values']['custom_css'] = $custom_css;
  }
}
