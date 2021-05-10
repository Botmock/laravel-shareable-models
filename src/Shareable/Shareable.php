<?php declare(strict_types=1);

namespace Sassnowski\LaravelShareableModel\Shareable;

trait Shareable
{
    public function links()
    {
        return $this->morphMany(ShareableLink::class, 'shareable');
    }

    public function active_links()
    {
        return $this->morphMany(ShareableLink::class, 'shareable')->where('active', 1);
    }
}
