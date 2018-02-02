<?php 
class Client {
	private $uri;
	private $jsonrpc;

	function __construct($host, $port, $user, $pass)
	{
		$this->uri = "http://" . $user . ":" . $pass . "@" . $host . ":" . $port . "/";
		$this->jsonrpc = new jsonRPCClient($this->uri,false);
	}

	function getBalance($user_session)
	{
		//return $this->jsonrpc->getbalance("zelles(" . $user_session . ")", 6);
		//return 21;
		return $this->jsonrpc->getbalance($user_session, 6);
	}

       function getAddress($user_session)
        {
                return $this->jsonrpc->getaccountaddress($user_session);
	}

	function getAddressList($user_session)
	{
		return $this->jsonrpc->getaddressesbyaccount($user_session);
		//return array("1test", "1test");
	}

	function getTransactionList($user_session)
	{
		return $this->jsonrpc->listtransactions($user_session, 200);
	}

	function getNewAddress($user_session)
	{
	//	echo "indise add";
		return $this->jsonrpc->getnewaddress($user_session);
		//return "1test";
	}

	function withdraw($user_session, $address, $amount)
	{
		return $this->jsonrpc->sendfrom($user_session, $address, (float)$amount, 6);
		//return "ok wow";
	}
	function payment($address, $amount,$comment)
	{
		return $this->jsonrpc->sendtoaddress( $address, (float)$amount, $comment);
		//return "ok wow";
	}


	function getadminbal()
	{
		//return $this->jsonrpc->listaccounts();
		return $this->jsonrpc->getbalance();
	}

}
?>
