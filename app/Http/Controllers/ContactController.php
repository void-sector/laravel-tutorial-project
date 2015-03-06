<?php

namespace App\Http\Controllers;

/**
 * Contact Controller
 */
class ContactController extends Controller
{
    /**
     * Basic contact thingy
     * @return type
     */
	public function index()
	{
		return view('contact', [
            'people' => [
                'bart', 'simson', 'will', 'smith'
            ]
        ]);
	}
}
