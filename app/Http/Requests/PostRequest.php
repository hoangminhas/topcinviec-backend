<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
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
    public function rules(): array
    {
        return [
            'title'=>'required|min:8|max:50',
            'content'=>'required',
            'salary'=>'required',
            'job_type'=>'required',
            'job_level'=>'required',
            'quantity'=>'required',
            'gender'=>'required',
            'experience'=>'required',
            'posting_start'=>'required',
            'posting_end'=>'required',
            'business_category_id'=>'required'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required'=>'You must fill the title of the post',
            'title.min'=>'Your title must have at least 8 characters',
            'title.max'=>'Your title can not over 50 characters',
            'content.required'=>'You must fill the content of your post',
            'salary.required'=>'You must fill the salary of your post',
            'job_type.required'=>'You must fill the job_type of your post',
            'job_level.required'=>'You must fill the job_level of your post',
            'quantity.required'=>'You must fill the quantity of your post',
            'gender.required'=>'You must fill the gender of your post',
            'experience.required'=>'You must fill the experience of your post',
            'posting_start.required'=>'You must fill the posting_start of your post',
            'posting_end.required'=>'You must fill the posting_end of your post',
            'business_category_id.required'=>'You must fill the business_category_id of your post'
        ];
    }
}
