<?php
use AppHosting\Repositories\HostingRepo;
class HostingController extends BaseController {
	public function index(){
		$x = new HostingRepo;
		return $x->getListHostings();
	}

}
