<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteThemeScrollingNav\Cells;

use CodeIgniter\View\Cells\Cell;

class HeaderCell extends Cell
{
    public $title = 'Welcome to Scrolling Nav';
    public $description = 'A functional Bootstrap 5 boilerplate for one page scrolling websites';
    public $actionLabel = 'Start scrolling!';
    public $actionUrl = '#index';

    protected string $view = VENDORPATH . 'basic-app/site-theme-scrolling-nav/templates/header.php';
}