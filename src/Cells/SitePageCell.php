<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteThemeScrollingNav\Cells;

use CodeIgniter\View\Cells\Cell;

class SitePageCell extends Cell
{
    public $title;

    public $id;
    
    public $content;

    public $even = false;

    protected string $view = VENDORPATH . 'basic-app/site-theme-scrolling-nav/templates/page.php';
}