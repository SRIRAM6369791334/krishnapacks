<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Serves static informational and product showcase pages.
 */
class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home(): View
    {
        return view('pages.home');
    }

    /**
     * Display the about / company profile page.
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * Display the composting information page.
     */
    public function composting(): View
    {
        return view('pages.composting');
    }

    /**
     * Display the products overview page.
     */
    public function products(): View
    {
        return view('pages.products');
    }

    /**
     * Display the film extrusion product page.
     */
    public function film(): View
    {
        return view('pages.products.film');
    }

    /**
     * Display the injection molding product page.
     */
    public function injection(): View
    {
        return view('pages.products.injection');
    }

    /**
     * Display the extrusion coating product page.
     */
    public function extrusion(): View
    {
        return view('pages.products.extrusion');
    }

    /**
     * Display the zero-waste solutions product page.
     */
    public function waste(): View
    {
        return view('pages.products.waste');
    }

    /**
     * Display the garments packaging product page.
     */
    public function garments(): View
    {
        return view('pages.products.garments');
    }
}
