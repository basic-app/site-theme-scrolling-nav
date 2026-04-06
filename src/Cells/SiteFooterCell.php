<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteThemeScrollingNav\Cells;

use CodeIgniter\View\Cells\Cell;

class SiteFooterCell extends Cell
{
    public $copyright = 'Copyright &copy; Your Website 2023';

    protected string $view = VENDORPATH . 'basic-app/site-theme-scrolling-nav/templates/footer.php';
}