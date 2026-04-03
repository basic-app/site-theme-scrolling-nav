<?php

namespace BasicApp\SiteThemeScrollingNav\Cells;

use BasicApp\Site\Interfaces\SiteCellInterface;

class SiteCell implements SiteCellInterface
{
	public function layout(array $params = []) : string
	{
		return view('BasicApp\SiteThemeScrollingNav\layout', $params);
	}
	
	public function index(array $params = []) : string
	{
		return view('BasicApp\SiteThemeScrollingNav\index', $params);
	}

	public function section(array $params = []) : string
	{
		return view('BasicApp\SiteThemeScrollingNav\index', $params);
	}
} 