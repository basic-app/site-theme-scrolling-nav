<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteThemeScrollingNav\Cells;

use CodeIgniter\View\Cells\Cell;

class SiteNavCell extends Cell
{
    public $siteName = 'Start Bootstrap';
    
    public $baseUrl = '#page-top';
    
    public array $items = [];    

    protected string $view = VENDORPATH . 'basic-app/site-theme-scrolling-nav/templates/nav.php';
}