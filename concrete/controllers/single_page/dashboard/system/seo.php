<?php

namespace Concrete\Controller\SinglePage\Dashboard\System;

use Concrete\Core\Page\Controller\DashboardPageController;

class Seo extends DashboardPageController
{
    public function view()
    {
        return $this->buildRedirect([$this->getPageObject()->getFirstChild()]);
    }
}
