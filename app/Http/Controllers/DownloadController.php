<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DownloadController extends Controller
{
    public function download ($slug,$storedName,$name)
    {

        /**
         * Redirecting directly to gcloud storage will be more efficient for larger files, rather than pulling the file into Laravel, then downloading from Laravel.
         * Before Implimenting *** We need to learn how to store the original file name in the Content-Disposition metadata when uploading the file to Gcloud (https://cloud.google.com/storage/docs/gsutil/addlhelp/WorkingWithObjectMetadata)
        **/

        // return redirect()->away(Storage::disk('gcs')->url('attachments/' . $trove . "/" . $storedName));

        $name = Str::ascii($name);

        /**
         * For now, use the core Laravel storage -> download() option, as we can easily specify a custom file name for download.
         */
          return Storage::disk('gcs')->download('files/' . $slug . '/' . $storedName , $name);
        //

    }
}
