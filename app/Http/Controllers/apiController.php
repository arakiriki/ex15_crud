<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class apiController extends Controller
{
    public function index(){
        try{
            // $book_info = Book::all();
            $book_info = Book::first();
            // var_dump($book_info);
            $result = [
                'result' => true,
                'id' => $book_info->id,
                'title' => $book_info->title,
                'author' => $book_info->author,
            ];

        }catch(\Exception $e){
            $result = [
                'result' => false,
                'error' =>[
                    'messages' => [$e->getMessage()]
                ],
            ];
            return $this->resConversionJson($result,$e->getCode());
        }
        return $this->resConversionJson($result);
    }


    private function resConversionJson($result,$statusCode=200){
        if(empty($statusCode) || $statusCode <100 || $statusCode >= 600){
            $statusCode = 500;
        }
        return response()->json($result,$statusCode,['Content-Type' => 'application/json'],JSON_UNESCAPED_SLASHES);
        
        // return response()->json($result,$statusCode,['Content-Type' => 'application/json'],JSON_UNESCAPED_UNICODE);
    }


}
