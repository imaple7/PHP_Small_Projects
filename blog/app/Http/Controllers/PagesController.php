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
        $first = 'Fujie';
        $last = 'Chen';

        $fullname = $first . " " . $last;
        $information = 'Information Try';

        $data = [];
        $data['fullname'] = $fullname;
        $data['information'] = $information;
        return view('pages.about')->withData($data);
    }

    public function getContact() {
        return view('pages.contact');
    }

}