<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class TvViewModel extends ViewModel
{
	public $popularTv;
	public $topRatedTv;

	public function __construct($popularTv, $topRatedTv)
	{
		$this->popularTv = $popularTv;
		$this->topRatedTv = $topRatedTv;
	}

	public function popularTv()
	{
		return $this->formatTv($this->popularTv);
	}

	public function topRatedTv()
	{
		return $this->formatTv($this->topRatedTv);
	}

	private function formatTv($tv)
	{
		return collect($tv)->map(function ($tvshow) {
			return collect($tvshow)->merge([
				'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $tvshow['poster_path'],
				'first_air_date' => Carbon::parse($tvshow['first_air_date'])->format('M d, Y'),
			])->only([
				'poster_path', 'id', 'name', 'overview', 'first_air_date',
			]);
		});
	}
}
