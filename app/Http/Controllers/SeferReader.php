<?php

namespace SeferReader\Http\Controllers;

use Illuminate\Http\Request;

class SeferReader extends Controller
{
    /**
    * Description: Handles the initial
    *              submission of the form.
    *
    * @function handleSubmit
    * @return mixed
    */
    public function handleSubmit(Request $r) {
        $url = $r->input('url');

        if (is_null($url)) {
            $url = env('TXT_DEFAULT_URL');
        }
        if ($url) {
            $contents = file_get_contents($url);
            // Redirect to method that will purge
            // and validate, generate the required
            // output <-- @TODO
            var_dump($contents);
        }
        else {
            // Error
            // @TODO: Create an error page :D
            dd("CREATE ERROR PAGE!");
        }
    }

    /**
    * Description: Validates if an URL is well formed
    *
    * @function _validateUrl
    * @return bool
    */
    private function _validateUrl() {
        return (filter_var($url, FILTER_FLAG_HOST_REQUIRED ));
    }
}
