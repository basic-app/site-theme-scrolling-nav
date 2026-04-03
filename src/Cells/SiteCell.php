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
		$params['title'] = $params['title'] ?? 'Scrolling Nav - Start Bootstrap Template';
		$params['scripts'] = $params['scripts'] ?? '';
		$params['styles'] = $params['styles'] ?? '';
		$params['header'] = $params['header'] ?? '';
		$params['footer'] = $params['footer'] ?? '';
		$params['nav'] = $params['nav'] ?? '';
		$params['locale'] = $params['locale'] ?? 'en';

		return view('BasicApp\SiteThemeScrollingNav\layout', $params);
	}
	
	public function page(array $params = []) : string
	{
		$params['even'] = $params['even'] ?? false;
		$params['title'] = $params['title'] ?? null;
		$params['id'] = $params['id'] ?? null;
		$params['content'] = $params['content'] ?? null;

		return view('BasicApp\SiteThemeScrollingNav\page', $params);
	}

	public function header(array $params = []) : string
	{
		$params['title'] = $params['title'] ?? 'Welcome to Scrolling Nav';
		$params['description'] = $params['description'] ?? 'A functional Bootstrap 5 boilerplate for one page scrolling websites';
		$params['actionLabel'] = $params['actionLabel'] ?? 'Start scrolling!';
		$params['actionUrl'] = '#index';

		return view('BasicApp\SiteThemeScrollingNav\header', $params);
	}

	public function footer(array $params = []) : string
	{
		$params['copyright'] = $params['copyright'] ?? 'Copyright &copy; Your Website 2023';

		return view('BasicApp\SiteThemeScrollingNav\footer', $params);
	}

	public function nav(array $params = []) : string
	{
		$params['siteName'] = $params['siteName'] ?? 'Start Bootstrap';
		$params['baseUrl'] = $params['baseUrl'] ?? '#page-top';
		$params['items'] = $params['items'] ?? [];

		return view('BasicApp\SiteThemeScrollingNav\nav', $params);
	}
} 