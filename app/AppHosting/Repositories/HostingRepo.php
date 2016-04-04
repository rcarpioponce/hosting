<?php
namespace AppHosting\Repositories;
class HostingRepo{
	public function getListHostings(){
		$list_accounts = \CpanelWhm::listaccts();
	    $data = array('data' => $list_accounts);
		return \View::make('hosting.grilla',$data);
	}
}