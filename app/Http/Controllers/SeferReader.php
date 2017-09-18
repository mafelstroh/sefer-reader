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
            $wordArray = $this->_processWordOutput(trim(strtolower($contents)));

            print_r($wordArray);
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

    private function _processWordOutput($file_contents) {
        // This will give us a count per-word
        // We also want it as an array to make use
        // of array_count_values to calculate the word
        // occurrency.
        $wordArray = str_word_count($file_contents, 2);
        $totalWords = count($wordArray);
        $ksort($wordArray);
        // Since we have an array separated by key (as words),
        // we can count the ocurrences of each word
        $wordArrayCount = array_count_values($wordArray);

        return $wordArrayCount;
    }
}
