<?php

namespace App\Sites\Portal\Modules\Home\Blocks\Profile;

use Roducks\Page\Block;
use Roducks\Lib\Utils\Date;

class Copyright extends Block {

  public function index()
  {
    $this->view->data('year', Date::getYear());
    $this->view->load('copyright');

    return $this->view->output();
  }
}
