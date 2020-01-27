<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserKey;
use App\UserDietPlan;
use App\Ingredienten;
use App\Ingredientcn;
use App\Ingredientde;
use App\Ingredientel;
use App\Ingredientes;
use App\Ingredientfr;
use App\Ingredientgb;
use App\Ingredientit;
use App\Ingredientkr;
use App\Ingredientno;
use App\Ingredientpt;
use App\Ingredientus;
use App\Ingredienttr;
use App\Ingredientru;
use App\Ingredientjp;
use App\Ingredientar;
use App\Ingredientpr;
use App\Ingredientse;
use App\Ingredientfi;
use PDF;
use DB;

class PdfdownloadController extends Controller
{
    //
    public function downloadpdf($lang, $userkey, $week_num) {

        $user_diet_plan = UserDietPlan::where('user_key_num', $userkey)->get();
        $weekCount = 7;
        $ingredient = [];

        $model_name = "ingredient{$lang}";
        for($j=0; $j<$weekCount; $j++) {
            $date = ($week_num - 1) * 7 + $j;
            $breakfast[] = DB::table($model_name)->select('value', 'unit', 'ingredient_name')->where('diet_id', $user_diet_plan[$date]['breakfast'])->get();
            $brunch[] = DB::table($model_name)->select('value', 'unit', 'ingredient_name')->where('diet_id', $user_diet_plan[$date]['brunch'])->get();
            $lunch[] = DB::table($model_name)->select('value', 'unit', 'ingredient_name')->where('diet_id', $user_diet_plan[$date]['lunch'])->get();
            $dinner[] = DB::table($model_name)->select('value', 'unit', 'ingredient_name')->where('diet_id', $user_diet_plan[$date]['dinner'])->get();
        }
        
        $pdf = PDF::loadView('dietplan.pdfcontent', [
            'breakfasts' => $breakfast,
            'brunchs'    => $brunch,
            'lunchs'     => $lunch,
            'dinners'    => $dinner
        ]);
        return $pdf->download('Grocery_list_for_week.pdf');
    }

}
