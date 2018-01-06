<?php
/**
 * User: phylogram
 * Date: 1/6/18
 * Time: 3:15 PM
 */

/**
 * Interface install
 *
 * Runs at installation of module
 */
interface InstallGrafanaApiInterface {

  /**
   * @return bool on success
   */
  public static function makeTables();

  /**
   * @return bool on "All there"
   */
  public static function checkTables();
}