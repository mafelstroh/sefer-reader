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
            $arrayWithPrimeResults = array_map(function ($n) {
                for ($i=2; $i<=$n/2; $i++) {
                    if (($n % $i) == 0) {
                        return "$n is NOT PRIME!";
                    }
                    else
                        return "$n is PRIME!";
                }
            }, $wordArray['wordOcurrencyTotal']);

            return view('reader.results')
                ->with('wordsAndWords', $wordArray['wordOcurrencyTotal'])
                ->with('wordsPrime',    $arrayWithPrimeResults)
                ->with('wordCount',     $wordArray['totalWords']);
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
        ## TOTAL WORDS
        $totalWordsArray = str_word_count($file_contents, 2);
        ## TOTAL NUMBER OF WORDS (not separately, but overall)
        $totalWords      = count($totalWordsArray);
        // Sort it to make it nicer
        //asort($totalWordsArray);

        // Since we have an array separated by key (as words),
        // we can count the ocurrences of each word
        $wordArrayCount = array_count_values($totalWordsArray);

        $dataToReturn = [
            'totalWords'         => $totalWords,
            'totalWordsArray'    => $totalWordsArray,
            'wordOcurrencyTotal' => $wordArrayCount,

        ];
        return $dataToReturn;
    }


}
