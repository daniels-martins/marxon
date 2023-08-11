<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

/**
 * This class is just a combination of helper functions, no class definition needed
 */


function presentRouteName()
{
	if (Str::contains(Route::currentRouteName(), ['.show', '.edit'], true)) {
		// convert the string to array (of two elements) for easy manipulation
		$routeNameArray = explode('.', Route::currentRouteName(), 2);
		// reorganize the string
		$routeNameArray[1] = $routeNameArray[1] == 'show' ? 'Details' : 'Edit' ;

		$arrangedRouteName = "$routeNameArray[0] $routeNameArray[1]";

		return $arrangedRouteName;
	}
	return Route::currentRouteName();
}
