<?php

namespace App\Http\Controllers;


use App\Http\Requests\FileUploadRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SetLangRequest;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class DefaultController extends Controller
{

    public int $per_page = 20;


    public function index()
    {
        return view('default.index', [
            'test' => 'Toto je test variable',
        ]);
    }


    public function files(Request $request)
    {
        $files = File::orderBy('id', 'desc')->paginate($this->per_page);

        return view('default.files', [
            'files' => $files,
        ]);
    }

    /**
     * @param Request $request
     * @param $lang
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setLang(Request $request, $lang)
    {
        if ( !in_array($lang, ['en', 'sk']) ) {
            session()->flash('error', __('messages.lang_not_supported', ['value' => $lang]));
            return redirect()->back();
        }

        session()->put('lang', $lang);
        app()->setLocale($lang);

        $user = auth()->user();

        if ( $user ) {
            $user->lang = $lang;
            $user->save();
        }

        session()->flash('success', __('messages.lang_changed'));

        return redirect()->back();
    }
}
