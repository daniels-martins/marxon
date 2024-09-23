<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

/**
 * This class is just a combination of helper functions, no class definition needed
 */


if (!function_exists('presentRouteName')) {
	function presentRouteName()
	{
		if (Str::contains(Route::currentRouteName(), ['.show', '.edit'], true)) {

			// convert the string to array (of two elements) for easy manipulation
			$routeNameArray = explode('.', Route::currentRouteName(), 2);

			// reorganize the string
			$routeNameArray[1] = $routeNameArray[1] == 'show' ? 'Details' : 'Edit';

			$arrangedRouteName = "$routeNameArray[0] $routeNameArray[1]";

			return $arrangedRouteName;
		}
		return Route::currentRouteName();
	}
}



if (!function_exists('getNiceAdjective')) {

	/**
	 * This method generates good adjectives to quapp/Notificationsalify the day
	 * eg. beautiful, amazing, wonderful, blessed etc.
	 * @return string 
	 */
	function getNiceAdjective(): string
	{
		$nice_day_adjectives = array(
			"beautiful",
			"gorgeous",
			"splendid",
			"splendiferous",
			"magnificent",
			"stunning",
			"breathtaking",
			"radiant",
			"glorious",
			"resplendent",
			"dazzling",
			"sublime",
			"superb",
			"exquisite",
			"enchanting",
			"captivating",
			"awe-inspiring",
			"heavenly",
			"idyllic",
			"picturesque",
			"serene",
			"tranquil",
			"peaceful",
			"harmonious",
			"delightful",
			"charming",
			"wonderful",
			"marvelous",
			"fabulous",
			"divine",
			"celestial",
			"blissful",
			"euphoric",
			"ecstatic",
			"joyful",
			"elated",
			"heavenly",
			"ethereal",
			"angelic",
			"celestial",
			"paradisal",
			"utopian",
			"dreamlike",
			"godly",
			"sacred",
			"holy",
			"blessed",
			"consecrated",
			"sanctified",
			"hallowed",
			"saintly",
			"pious",
			"devout",
			"reverent",
			"righteous",
			"virtuous",
			"spiritual",
			"divine",
			"ethereal",
			"heavenly",
			"celestial"
		);

		$randomIndex = array_rand($nice_day_adjectives, 1);

		return $nice_day_adjectives[$randomIndex];
	}

}