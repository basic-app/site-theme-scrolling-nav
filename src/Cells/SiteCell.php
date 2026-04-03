<?php

namespace BasicApp\SiteThemeScrollingNav\Cells;

use BasicApp\Site\Interfaces\SiteCellInterface;

class SiteCell implements SiteCellInterface
{
	public function layout(array $params = []) : string
	{
		return view('BasicApp\SiteThemeScrollingNav\layout', ['params' => $params]);
	}
	
	public function section(array $params = []) : string
	{
		return view('BasicApp\SiteThemeScrollingNav\section', ['params' => $params]);
	}
} 