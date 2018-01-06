<?php
/**
 * User: phylogram
 * Date: 1/6/18
 * Time: 1:43 PM
 *
 * To Do:
 *  1) Password Security: How to store Grafana passwords?
 */


/**
 * Interface MappingInterface
 *
 * Maps Drupal IDs to Grafana IDs in the database
 *
 * All functions are static
 *
 * 1) Grafana Drupal User Mapping
 *     isGrafanaUser, getGrafanaUser, insertGrafanaUser, deleteGrafanaUser, updateGrafanaUser
 * 2) Drupal API
 *    getCurrentDrupalUser
 * 3) Grafana URL
 *    getGrafanaURL, setGrafanaURL, deleteGrafanaURL, updateGrafanaURL
 */
interface MappingInterface {

  ###################################
  # 1) Grafana Drupal User Mapping  #
  ###################################

  /**
   * Determines if Drupal User is already Grafana User by Drupal ID
   *
   * @param $id
   *
   * @return mixed
   */
  public static function isGrafanaUser($id);

  /**
   * Gets Grafana credentials by Drupal User ID
   *
   * @param $id int Drupal User ID
   *
   * @return array {'id'=> $id, 'name'=> $name, 'role' => $role, 'password' => $password}
   */
  public static function getGrafanaUser($id);

  /**
   * Inserts new Grafana User to Drupal database
   *
   * @param $id new Grafana ID
   * @param $name new Grafana name
   * @param $role new Grafana role
   * @param $password new Grafana password
   *
   * @return bool on success
   */
  public static function insertGrafanaUser($id, $name, $role, $password);

  /**
   * Deletes Grafana User from Drupal database
   *
   * @param $id new Grafana ID
   * @param $name new Grafana name
   * @param $role new Grafana role
   * @param $password new Grafana password
   *
   * @return bool on success
   */
  public static function deleteGrafanaUser($id, $name, $role, $password);

  /**
   * Updates Grafana User from Drupal database
   *
   * @param $oldUserCredentials array {'id'=> $id, 'name'=> $name, 'role' => $role, 'password' => $password}
   * @param $newUserCredentials array {'id'=> $id, 'name'=> $name, 'role' => $role, 'password' => $password}
   *
   * @return bool on success
   */
  public static function updateGrafanaUser($oldUserCredentials, $newUserCredentials);

  #################
  # 2) Drupal API #
  #################

  /**
   * Just a wrapper for the Drupal API, to keep functionality in ine place
   *
   * @return array {'id'=> $id, 'name'=> $name, 'role' => $role}
   */
  public static function getCurrentDrupalUser();

  ##################
  # 3) Grafana URL #
  ##################

  /**
   * @return string Grafana URL
   */
  public static function getGrafanaURL();

  /**
   * @param $url
   *
   * @return bool on success
   */
  public static function setGrafanaURL($url);

  /**
   * @return bool on success
   */
  public function deleteGrafanaURL();

  /**
   * @param $newUrl
   *
   * @return bool on success
   */
  public function updateGrafanaURL($newUrl);

}