<?php

namespace App\Http\Requests;

use App\Link;
use Illuminate\Foundation\Http\FormRequest;

class StoreLink extends FormRequest
{
    private $allowed_types = ['supaBoss'];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        $event = Event::find((int)$this->route('event'));
        return in_array($this->user()->type, $this->allowed_types);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'         => 'required|max:255',
            'linktext'      => 'required|max:255',
            'link'          => 'url',
        ];
    }

}
