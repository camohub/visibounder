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


class FilesController extends Controller
{

    public int $per_page = 20;


    public function files(Request $request)
    {
        $files = File::orderBy('id', 'desc')->paginate($this->per_page);

        return view('default.files', [
            'files' => $files,
        ]);
    }


    public function fileUpload(FileUploadRequest $request)
    {
        $file = $request->file('file');
        $file_name = $file->getClientOriginalName();
        $file_name = Str::slug($file_name);
        $file_name = Str::lower($file_name);
        $file_name = time() .'-'. $file_name;

        $disc_path = $file->storeAs('campaigns', $file_name, 'public');

        $file = new File();
        $file->name = $file_name;
        $file->path = $disc_path;
        $file->thumb_path = $disc_path;
        $file->save();

        session()->flash('success', __('messages.files.upload_success'));

        return redirect()->back();
    }


    public function fileDelete(Request $request, $id)
    {
        $file = File::find($id);
        $file->forceDelete();

        Storage::disk('public')->delete($file->path);

        session()->flash('success', __('messages.files.delete_success'));

        return redirect()->back();
    }
}
