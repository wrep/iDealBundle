<?php

namespace Wrep\IDealBundle\IDeal\Request;

use Wrep\IDealBundle\IDeal\Merchant;

class DirectoryRequest extends BaseRequest
{
	public function __construct(Merchant $merchant)
	{
		parent::__construct(BaseRequest::TYPE_DIRECTORY, $merchant);
	}
}