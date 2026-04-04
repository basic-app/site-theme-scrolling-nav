<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteThemeScrollingNav\Cells;

use CodeIgniter\View\Cells\Cell;

class LayoutCell extends Cell
{
    public $title = 'Scrolling Nav - Start Bootstrap Template';
    public $locale = 'en';
    public $scripts;
    public $styles;
    public $header;
    public $footer;
    public $content;
    public $nav;

    protected string $view = VENDORPATH . 'basic-app/site-theme-scrolling-nav/templates/layout.php';
}