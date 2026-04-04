<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteThemeScrollingNav\Cells;

use BasicApp\Site\Interfaces\SiteCellInterface;
use BasicApp\ThemeBootstrap5\Cells\Bootstrap5Cell;

class SiteCell extends Bootstrap5Cell implements SiteCellInterface
{
	public function layout(array $params = []) : string
	{
        return view_cell('BasicApp\SiteThemeScrollingNav\Cells\LayoutCell', $params);
    }
	
	public function page(array $params = []) : string
	{
        return view_cell('BasicApp\SiteThemeScrollingNav\Cells\PageCell', $params);
	}

	public function header(array $params = []) : string
	{
        return view_cell('BasicApp\SiteThemeScrollingNav\Cells\HeaderCell', $params);
	}

	public function footer(array $params = []) : string
	{
        return view_cell('BasicApp\SiteThemeScrollingNav\Cells\FooterCell', $params);
	}

	public function nav(array $params = []) : string
	{
        return view_cell('BasicApp\SiteThemeScrollingNav\Cells\NavCell', $params);
	}
} 