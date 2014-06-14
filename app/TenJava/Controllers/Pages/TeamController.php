<?php
namespace TenJava\Controllers\Pages;

use Response;
use TenJava\Controllers\Abstracts\BaseController;

class TeamController extends BaseController {

    public function showTeam() {
        $this->setPageTitle("Meet the team");
        $this->setActive("team");
        return Response::view('pages.static.judges', array());
    }

} 