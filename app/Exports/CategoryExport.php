<?php

namespace App\Exports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CategoryExport implements FromCollection , WithHeadings
{

    public function headings():array{
        return[
            'Id',
            'Name',
            'Created_at',
        ];
    }

    public function collection()
    {
        if (app()->getLocale() == 'ar'){
            return Category::select('id' , 'name_ar' , 'created_at')->get();
        }else{
            return Category::select( 'id' ,'name_en' , 'created_at')->get();
        }
    }
}
