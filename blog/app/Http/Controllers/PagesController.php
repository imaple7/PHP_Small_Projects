<?php
/**
 * Created by PhpStorm.
 * User: fujiechen
 * Date: 2017-05-23
 * Time: 10:48 PM
 */

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('pages.welcome');
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getContact() {
        return view('pages.contact');
    }

}