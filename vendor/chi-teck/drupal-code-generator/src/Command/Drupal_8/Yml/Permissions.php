<?php

namespace DrupalCodeGenerator\Command\Drupal_8\Yml;

use DrupalCodeGenerator\Command\BaseGenerator;
use DrupalCodeGenerator\Utils;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

/**
 * Implements d8:yml:permissions command.
 */
class Permissions extends BaseGenerator {

  protected $name = 'd8:yml:permissions';
  protected $description = 'Generates a permissions yml file';
  protected $alias = 'permissions';

  /**
   * {@inheritdoc}
   */
  protected function interact(InputInterface $input, OutputInterface $output) {
    $questions['machine_name'] = new Question('Module machine name');
    $questions['machine_name']->setValidator([Utils::class, 'validateMachineName']);

    $this->collectVars($input, $output, $questions);

    $this->addFile()
      ->path('{machine_name}.permissions.yml')
      ->template('d8/yml/permissions.twig');
  }

}
