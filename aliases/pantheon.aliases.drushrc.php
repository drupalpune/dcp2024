<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */
  $aliases['drupalcamp-pune-2024.*'] = array(
    'uri' => '${env-name}-drupalcamp-pune-2024.pantheonsite.io',
    'remote-host' => 'appserver.${env-name}.37f3266b-770f-44f2-bddc-509ac04f1dec.drush.in',
    'remote-user' => '${env-name}.37f3266b-770f-44f2-bddc-509ac04f1dec',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'files',
     ),
  );

