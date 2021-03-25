<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{
	public $popularMovies;
	public $nowPlayingMovies;

	public function __construct($popularMovies, $nowPlayingMovies)
	{
		$this->popularMovies = $popularMovies;
		$this->nowPlayingMovies = $nowPlayingMovies;
	}

	public function popularMovies()
	{
		return $this->formatMovies($this->popularMovies);
	}

	public function nowPlayingMovies()
	{
		return $this->formatMovies($this->nowPlayingMovies);
	}

	private function formatMovies($movies)
	{
		return collect($movies)->map(function ($movie) {
			return collect($movie)->merge([
				'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'],
				'release_date' => Carbon::parse($movie['release_date'])->format('M d, Y'),
			])->only([
				'poster_path', 'id', 'title', 'overview', 'release_date', 
			]);
		});
	}
}
