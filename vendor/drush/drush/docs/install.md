!!! note

    Drush 9 only supports one install method. It requires that your Drupal 8 site be built with Composer and Drush be listed as a dependency. 
    
    See the [Drush 8 docs](http://docs.drush.org/en/8.x) for installing prior versions of Drush.

Install a site-local Drush and Drush Launcher.
-----------------
1. It is recommended that Drupal 8 sites be [built using Composer, with Drush listed as a dependency](https://github.com/drupal-composer/drupal-project). That project already includes Drush in its composer.json. If your Composer project doesn't yet depend on Drush, run `composer require drush/drush` to add it. 
1. To be able to call `drush` from anywhere, install the [Drush Launcher](https://github.com/drush-ops/drush-launcher). That is a small program which listens on your $PATH and hands control to a site-local Drush that is in the /vendor directory of your Composer project. If you skip this step, run Drush from Drupal root via `../vendor/bin/drush`. In that case Drush's bash integration and custom prompt won't work.
1. Run `drush init`. This edits ~/.bashrc so that Drush's custom prompt and bash integration are active.
1. See [Usage](http://docs.drush.org/en/master/usage/) for details on using Drush.
1. To use a non-default PHP, [edit ~/.bashrc so that the desired PHP is in front of your $PATH](http://stackoverflow.com/questions/4145667/how-to-override-the-path-of-php-to-use-the-mamp-path/10653443#10653443). If that is not desirable, you can change your PATH for just one request: `PATH=/path/to/php:$PATH` drush status ...`

!!! note

    Drush 9 cannot run commandfiles from Drush 8 and below (e.g. example.drush.inc). See our [guide on porting commandfiles](https://weitzman.github.io/blog/port-to-drush9). Also note that alias and config files use a new .yml format in Drush 9.

Drupal Compatibility
-----------------
<table>
  <tr>
    <th> Drush Version </th> 
    <th> Drush Branch </th>
    <th> PHP </th>
    <th> Compatible Drupal versions </th>
    <th> Code Style </th>
    <th> Isolation Tests </th>
    <th> Functional Tests </th>
  </tr>
  <tr>
    <td> Drush 9 </td>
    <td> <a href="https://travis-ci.org/drush-ops/drush">master</a> </td>
    <td> 5.6+ </td>
    <td> D8.4+ </td>
    <td align="center">
      <img src="https://api.shippable.com/projects/5507addd5ab6cc1352a213b5/badge?branch=master" />
    </td>
    <td align="center">
      <img src="https://travis-ci.org/drush-ops/drush.svg?branch=master" />
    </td>
    <td align="center">
      <img src="https://circleci.com/gh/drush-ops/drush.svg?style=shield" />
    </td>
  </tr>
  <tr>
    <td> Drush 8 </td>
    <td> <a href="https://travis-ci.org/drush-ops/drush">8.x</a> </td>
    <td> 5.4.5+ </td>
    <td> D6, D7, D8.3- </td>
    <td align="center">
      <img src="https://circleci.com/gh/drush-ops/drush.svg?style=shield" />
    </td>
    <td align="center">
      -
    </td>
    <td align="center">
      <img src="https://travis-ci.org/drush-ops/drush.svg?branch=8.x" />
    </td>
  </tr>
  <tr>
    <td> Drush 7 </td>
    <td> <a href="https://travis-ci.org/drush-ops/drush">7.x</a> </td>
    <td> 5.3.0+ </td>
    <td> D6, D7 </td>
    <td colspan="3" align="center"> Unsupported </td>
  </tr>
  <tr>
    <td> Drush 6 </td>
    <td> <a href="https://travis-ci.org/drush-ops/drush">6.x</a> </td>
    <td> 5.3.0+ </td>
    <td> D6, D7 </td>
    <td colspan="3" align="center"> Unsupported </td>
  </tr>
  <tr>
    <td> Drush 5 </td>
    <td> <a href="https://travis-ci.org/drush-ops/drush">5.x</a> </td>
    <td> 5.2.0+ </td>
    <td> D6, D7 </td>
    <td colspan="3" align="center"> Unsupported </td>
  </tr>
</table>
