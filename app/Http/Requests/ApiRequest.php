<?php
// namespace App\Http\Requests;

// use Illuminate\contracts\Validation\Validator;
// use Illuminate\Http\Exceptions\HttpResponseException;
// use App\Utils\ApiResponse;
// /**
//  * ビジネスツール共通FormRequest（API用）
//  */
// abstract class ApiRequest extends Request
// {
//     /**
//      * validationエラー時のレスポンス内容を指定
//      *
//      * @return string
//      */
//     protected function failedValidation(Validator $validator)
//     {
//         throw new HttpResponseException(ApiResponse::responseValidator($validator->errors()));
//     }
// }
