<?php

namespace App\Observers;

use App\Site;

class SiteObserver
{
    public function saving(Site $site)
    {
        if (empty($site->thumb)) {
            $site->thumb = 'images/8bdf511e23b183f9aac30aee3368152b.png';
        }
    }
}