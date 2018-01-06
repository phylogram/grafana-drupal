<?php
/**
 * User: phylogram
 * Date: 1/6/18
 * Time: 2:05 PM
 *
 * To Do:
 *   1) Security: Since basic auth is necessary, make sure to use https
 */

/**
 * Interface GrafanaApiInterface
 *
 * Communicates with the Grafana User API
 *
 * An instance - an user
 */
interface GrafanaApiInterface {

  /**
   * GrafanaApiInterface constructor.
   *
   * @param $userArray {'id'=> $id, 'name'=> $name, 'role' => $role, 'password' => $password}
   */
  public function __construct($userArray);

  /**
   * @return bool on success
   */
  public function logInGrafana();

  /**
   * @return bool on success
   */
  public function logOutGrafana();

  /**
   * @return bool on success
   */
  public function newGrafanaUser();

  /**
   * @return bool on success
   */
  public function deleteGrafanaUser();

  /**
   * @param $userArray {'id'=> $id, 'name'=> $name, 'role' => $role, 'password' => $password}
   *
   * @return bool on success
   */
  public function updateGrafanaUser($userArray);

  /**
   * @param $type
   *
   * @return mixed
   */
  public function getUserCredentials($type);
}