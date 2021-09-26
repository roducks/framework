<?php

namespace Community\Modules\TimeZone\Observers;

use Roducks\Services\Db;
use Roducks\Page\Observer;
use Roducks\Di\ContainerInterface;
use Roducks\Services\Language;

class TimeZone extends Observer {

  /**
   * @var \Roducks\Services\Language $lang
   */
  protected $lang;

  public function __construct(array $settings, Db $db, Language $lang)
  {
    parent::__construct($settings, $db);
    $this->lang = $lang;
  }

  public static function init(ContainerInterface $container)
  {
    return new static(
      $container->get('settings'),
      $container->get('db'),
      $container->get('lang')
    );
  }

  public function dispatch(array &$config)
  {
    $iso = $this->lang->get();

    if ($iso == 'es') {
      $config['timezone'] = 'America/Mexico_City';
    }
  }
}
