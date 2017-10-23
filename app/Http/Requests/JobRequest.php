<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
    public function rules()
    {
        return [
            'job_title' =>'required|min:5|max:255',
            'job_description'=>'required'
        ];
    }
}

            // $table->string('job_title',255);
            // $table->mediumText('job_description');
            // $table->date('deadline');
            // $table->enum('job_status',['do','doing','done']);
            // $table->timestamps();