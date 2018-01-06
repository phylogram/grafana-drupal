<?php
/**
 * User: phylogram
 * Date: 1/6/18
 * Time: 2:45 PM
 */

interface GrafanaLinkInterface {

  /**
   * @return array {'url': $url, 'headers': $headersArray, 'data': $data, 'type' $type'}
   */
  public static function getLink();
}