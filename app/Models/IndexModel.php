<?php

namespace App\Models;

use App\Services\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * Class IndexModel
 * @package App\Models
 */
class IndexModel
{
    /** @var Youtube $youtube */
    private $youtube;

    /**
     * IndexModel constructor.
     * @param Youtube $youtube
     */
    public function __construct(
        Youtube $youtube
    ){
        $this->youtube = $youtube;
    }

    /**
     * @return Youtube
     * @throws \Exception
     * @throws \Throwable
     */
    public function get()
    {
        return view('app.index');
    }

    /**
     * @param Request $request
     * @return string
     */
    public function post(Request $request)
    {
        /* Validate request */
        $validator = Validator::make($request->all(), [
            'query' => 'required|string|min:1'
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }

        /* Return rendered response from Youtube API */
        return ['html' => view('app.search-list', [
            'results' => $this->youtube->handle($request->post('query'))
        ])->render()];
    }
}

