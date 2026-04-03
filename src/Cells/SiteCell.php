<?php

namespace BasicApp\Site\Themes\ScrollingNav\Cells;

use BasicApp\Site\Interfaces\SiteCellInterface;

class SiteCell implements SiteCellInterface
{
	public function layout(array $params = []) : string
	{
		return view('BasicApp\Site\Themes\ScrollingNav\Views\layout', $params);
	}
	
	public function index(array $params = []) : string
	{
		return view('BasicApp\Site\Themes\ScrollingNav\Views\index', $params);
	}

	public function section(array $params = []) : string
	{
		return view('BasicApp\Site\Themes\ScrollingNav\Views\index', $params);
	}
} 