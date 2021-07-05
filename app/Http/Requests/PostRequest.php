<?php

namespace App\Http\Requests;

use App\Models\Post;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    private $str;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title"=>"required|max:255",
            "category_id"=>"required | integer",
            "description"=>"required|min:200",
        ];
    }


    // protected function prepareForValidation()
    // {
    //     $this->merge([
    //         'title' => Str::slug($this->title),
    //     ]);
    // }



    public function attributes()
    {
        return [
            'title' => 'post title',
            'category_id' => 'post category',
            'description ' => 'post description',
        ];
    }



    public function messages()
    {
        return [
           'category_id.integer'=>'The post category must be selected',
        ];
    }

    /**
     * It is s helper method for createUniqueSlug()
     */
    private function getRow()
    {
        $lastchar = substr($this->str,-1);   
        if($hasRow = Post::where('title',$this->str)->count()){
            if(is_numeric($lastchar)){
                $this->str[strlen($this->str)-1] = intval($lastchar)+$hasRow;
            }else{
                $this->str = $this->str."_{$hasRow}";
            }   
            $this->createUniqueSlug($this->str);
        }
    }


    public function createUniqueSlug($str = null)
    {
        $this->str = $str??$this->title;
        $this->getRow();
        return $this->str;
    }


}
