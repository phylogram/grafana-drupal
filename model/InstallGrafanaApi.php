<?php
/**
 * User: phylogram
 * Date: 1/6/18
 * Time: 3:21 PM
 */

class InstallGrafanaApi{

  /**
   * @return array
   */
  public static function makeTables() {
    $length = 255;
    $schema = array();
    $schema['grafana_org'] = array(
      // Example (partial) specification for table "node".
      'description' => 'The base table for nodes.',
      'fields' => array(
        'id' => array(
          'description' => 'id',
          'type' => 'serial',
          'unsigned' => TRUE,
          'not null' => TRUE,
        ),
        'host' => array(
          'description' => 'The Drupal host.',
          'type' => 'varchar',
          'length' => 255,
          'not null' => TRUE,
          'default' => '',
        ),
        'grafana_org' => array(
          'description' => 'Grafana Org',
          'type' => 'varchar',
          'length' => 255,
          'not null' => TRUE,
          'default' => '',
        ),
      ),
      'unique keys' => array('id' => array('id'),),
      'primary key' => array('id',),
    );

    $schema['grafana_users'] = array(
      // Example (partial) specification for table "node".
      'description' => 'The base table for nodes.',
      'fields' => array(
        'id' => array(
          'description' => 'id',
          'type' => 'serial',
          'unsigned' => TRUE,
          'not null' => TRUE,
        ),
        'drupal_user' => array(
          'description' => 'The Drupal user.',
          'type' => 'varchar',
          'length' => 255,
          'not null' => TRUE,
          'default' => '',
        ),
        'drupal_role' => array(
          'description' => 'Drupal role',
          'type' => 'varchar',
          'length' => 255,
          'not null' => TRUE,
          'default' => '',
        ),
        'drupal_id' => array(
          'description' => 'Drupal ID',
          'type' => 'varchar',
          'length' => 255,
          'not null' => TRUE,
          'default' => '',
        ),
        'grafana_user' => array(
          'description' => 'Grafana user',
          'type' => 'varchar',
          'length' => 255,
          'not null' => TRUE,
          'default' => '',
        ),
        'grafana_role' => array(
          'description' => 'Grafana role',
          'type' => 'varchar',
          'length' => 255,
          'not null' => TRUE,
          'default' => '',
        ),
        'grafana_id' => array(
          'description' => 'Grafana id',
          'type' => 'varchar',
          'length' => 255,
          'not null' => TRUE,
          'default' => '',
        ),
        'grafana_password' => array(
          'description' => 'Grafana password',
          'type' => 'varchar',
          'length' => 255,
          'not null' => TRUE,
          'default' => '',
        ),
        'grafana_auth_key' => array(
          'description' => 'Grafana auth key',
          'type' => 'varchar',
          'length' => 255,
          'not null' => TRUE,
          'default' => '',
        ),
        'drupal host' => array(
          'description' => 'Drupal host',
          'type' => 'varchar',
          'length' => 255,
          'not null' => TRUE,
          'default' => '',
        ),
        'grafana_org' => array(
          'description' => 'Grafana org',
          'type' => 'varchar',
          'length' => 255,
          'not null' => TRUE,
          'default' => '',
        ),
      ),
      'unique keys' => array('id' => array('id'),),
      'primary key' => array('id',),
    );


    return $schema;
  }

  /**
   * @return bool on "All there"
   */
  public static function checkTables() {
    // TODO: Implement checkTables() method.
  }

}