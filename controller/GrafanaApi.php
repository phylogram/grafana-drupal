<?php
/**
 * User: phylogram
 * Date: 1/6/18
 * Time: 3:07 PM
 */

require_once DRUPAL_ROOT . '/sites/default/modules/grafanaApi/grafanaApi.conf';

class GrafanaApi{

  protected $headers = [
    'Accept'=> 'application/json',
    'Content-type'=> 'application/json',
  ];
  public $basicAuthURL;

  /**
   * GrafanaApiInterface constructor.
   *
   * @param $userArray {'id'=> $id, 'name'=> $name, 'role' => $role, 'password'
   *   => $password}
   */
  public function __construct($userArray) {
    $urlsplit = parse_url(GRAFANA_HOST);
    $this->basicAuthURL = "{$urlsplit['scheme']}://{$userArray['name']}:{$userArray['password']}@{$urlsplit['host']}:{$urlsplit['port']}";
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

  /**
   * @param $orgName string
   *
   * @return object response
   */
  public function createOrganisation($orgName) {

    $data = ['name'=> $orgName];
    $data = json_encode($data);
    $url = $this->basicAuthURL . '/api/orgs';

    $response = drupal_http_request($url,
        array(
          'headers' => $this->headers,
          'method' => 'POST',
          'data' => $data,
          )
      );
    return $response;
  }

  /**
   * @param $orgID
   *
   * @return object
   */
  public function setOrganisation($orgID) {

    $url = $this->basicAuthURL . '/api/user/using/' . $orgID;
    $response = drupal_http_request($url,
        array(
          'headers' => $this->headers,
          'method' => 'POST',
        )
      );
    return array($url, $response);
  }

  /**
   * @param $data_source name
   *
   * @return object response
   */
  public function addDatasource($data_source) {
    $data = array(
      'name'=> $data_source, # $data_source // To Do!!!
      'type'=> 'influxdb',
      'access'=> 'proxy',
      'url'=> INFLUX_HOST,
      'password'=> GRAFANA_ADMIN_PASSWORD,
      'user'=> GRAFANA_ADMIN_USERNAME,           # This will have to be https eventually!
      'database'=> $data_source,
      'basicAuth'=> FALSE,
      'isDefault'=> TRUE,        # This is quite important - I want to define default as datasource in the dashboards.
      );

    $data = json_encode($data);
    $url = $this->basicAuthURL . '/api/datasources';

    $request = drupal_http_request($url,
      array(
        'headers' => $this->headers,
        'method' => 'POST',
        'data' => $data,
        )
      );
    return $request;
    }

    public function addDashboard($dashboard) {
      $data = json_encode($dashboard);
      $url = $this->basicAuthURL . '/api/dashboards/db';
      $request = drupal_http_request($url,
        array(
          'headers' => $this->headers,
          'method' => 'POST',
          'data' => $data,
        )
      );
      return $request;
    }



}