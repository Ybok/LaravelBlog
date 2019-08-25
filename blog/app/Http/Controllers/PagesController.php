<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('pages.welcome');
    }

    public function getAbout() {
        $first = 'Koby';
        $last = 'Christie';

        $fullname = $first . " " . $last;
        $email = 'kobybc5629@gmail.com';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        return view('pages.about')->withData($data);
    }

    public function getContact() {
        return view('pages.contact');
    }



}