<?php
/**
 * User: phylogram
 * Date: 1/6/18
 * Time: 3:07 PM
 */

class GrafanaApi implements GrafanaApiInterface {

  /**
   * GrafanaApiInterface constructor.
   *
   * @param $userArray {'id'=> $id, 'name'=> $name, 'role' => $role, 'password'
   *   => $password}
   */
  public function __construct($userArray) {
    parent::__construct($userArray);
  }

  /**
   * @return bool on success
   */
  public function logInGrafana() {
    // TODO: Implement logInGrafana() method.
  }

  /**
   * @return bool on success
   */
  public function logOutGrafana() {
    // TODO: Implement logOutGrafana() method.
  }

  /**
   * @return bool on success
   */
  public function newGrafanaUser() {
    // TODO: Implement newGrafanaUser() method.
  }

  /**
   * @return bool on success
   */
  public function deleteGrafanaUser() {
    // TODO: Implement deleteGrafanaUser() method.
  }

  /**
   * @param $userArray {'id'=> $id, 'name'=> $name, 'role' => $role, 'password'
   *   => $password}
   *
   * @return bool on success
   */
  public function updateGrafanaUser($userArray) {
    // TODO: Implement updateGrafanaUser() method.
  }

  /**
   * @param $type
   *
   * @return mixed
   */
  public function getUserCredentials($type) {
    // TODO: Implement getUserCredentials() method.
  }

}