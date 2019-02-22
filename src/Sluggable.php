<?php

namespace Artisan\LaravelSluggable;

use Illuminate\Database\Eloquent\Model;

trait Sluggable
{
	abstract public function slugBuilder(): slugBuilder;

	public static function bootSluggable()
	{
		static::creating(function(Model $model) {
			$model->generateSlug();
		});

		static::updating(function(Model $model) {
			$model->generateSlug();
		});
	}

	protected function generateSlug()
	{
		\Log::info('wow');
	}
}