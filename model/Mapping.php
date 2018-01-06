<?php
/**
 * User: phylogram
 * Date: 1/6/18
 * Time: 3:13 PM
 */

class Mapping implements MappingInterface{

  /**
   * Determines if Drupal User is already Grafana User by Drupal ID
   *
   * @param $id
   *
   * @return mixed
   */
  public static function isGrafanaUser($id) {
    // TODO: Implement isGrafanaUser() method.
  }

  /**
   * Gets Grafana credentials by Drupal User ID
   *
   * @param $id int Drupal User ID
   *
   * @return array {'id'=> $id, 'name'=> $name, 'role' => $role, 'password' =>
   *   $password}
   */
  public static function getGrafanaUser($id) {
    // TODO: Implement getGrafanaUser() method.
  }

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
  public static function insertGrafanaUser($id, $name, $role, $password) {
    // TODO: Implement insertGrafanaUser() method.
  }

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
  public static function deleteGrafanaUser($id, $name, $role, $password) {
    // TODO: Implement deleteGrafanaUser() method.
  }

  /**
   * Updates Grafana User from Drupal database
   *
   * @param $oldUserCredentials array {'id'=> $id, 'name'=> $name, 'role' =>
   *   $role, 'password' => $password}
   * @param $newUserCredentials array {'id'=> $id, 'name'=> $name, 'role' =>
   *   $role, 'password' => $password}
   *
   * @return bool on success
   */
  public static function updateGrafanaUser($oldUserCredentials, $newUserCredentials) {
    // TODO: Implement updateGrafanaUser() method.
  }

  /**
   * Just a wrapper for the Drupal API, to keep functionality in ine place
   *
   * @return array {'id'=> $id, 'name'=> $name, 'role' => $role}
   */
  public static function getCurrentDrupalUser() {
    // TODO: Implement getCurrentDrupalUser() method.
  }

  /**
   * @return string Grafana URL
   */
  public static function getGrafanaURL() {
    // TODO: Implement getGrafanaURL() method.
  }

  /**
   * @param $url
   *
   * @return bool on success
   */
  public static function setGrafanaURL($url) {
    // TODO: Implement setGrafanaURL() method.
  }

  /**
   * @return bool on success
   */
  public function deleteGrafanaURL() {
    // TODO: Implement deleteGrafanaURL() method.
  }

  /**
   * @param $newUrl
   *
   * @return bool on success
   */
  public function updateGrafanaURL($newUrl) {
    // TODO: Implement updateGrafanaURL() method.
  }

}