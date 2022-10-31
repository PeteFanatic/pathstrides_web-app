<?php
namespace App\Http\Controllers;
use App\Models\EnItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ItemsController extends Controller
{
    public function getItems(){
        $list = new EnItem(); //EnItem is a model
        $list = $list->getItems(); //getItems is a method

        foreach ($list as $item){
            $item['item_content']=strip_tags($item['item_content']);
            $item['item_content']=$Content = preg_replace("");
        }
        return response()->json($list);
    }
}