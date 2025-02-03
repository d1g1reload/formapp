<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function formRm064()
    {
        return view('form.update.rm064');
    }

    function formRm071()
    {
        return view('form.update.rm071');
    }
    function formRm072()
    {
        return view('form.update.rm072');
    }
    function formRm073()
    {
        return view('form.update.rm073');
    }
    function formRm074()
    {
        return view('form.update.rm074');
    }
    function formTwoPage()
    {
        return view('form.master.twopage');
    }

    function formRm045A()
    {
        return view('form.update.rm045a');
    }

    function formRm049()
    {
        return view('form.update.rm049');
    }

    function formRm049a()
    {
        return view('form.update.rm049a');
    }
    function formRm049b()
    {
        return view('form.update.rm049b');
    }
}
