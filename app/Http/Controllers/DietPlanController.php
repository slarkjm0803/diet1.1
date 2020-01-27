<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Helpers\UserSystemInfoHelper;
use App\UserKey;
use App\UserDietPlan;
use App\UserProfile;
use App\Dieten;
use App\Dietcn;
use App\Dietde;
use App\Dietel;
use App\Dietes;
use App\Dietfr;
use App\Dietgb;
use App\Dietit;
use App\Dietkr;
use App\Dietno;
use App\Dietpt;
use App\Dietus;
use App\Diettr;
use App\Dietru;
use App\Dietjp;
use App\Dietar;
use App\Dietpr;
use App\Dietse;
use App\Dietfi;
use App\Recipeen;
use App\Recipecn;
use App\Recipede;
use App\Recipeel;
use App\Recipees;
use App\Recipefr;
use App\Recipegb;
use App\Recipeit;
use App\Recipekr;
use App\Recipeno;
use App\Recipept;
use App\Recipeus;
use App\Recipetr;
use App\Reciperu;
use App\Recipejp;
use App\Recipear;
use App\Recipepr;
use App\Recipese;
use App\Recipefi;
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
use App;
use DB;
use Location;
use Session;
use Stripe\Stripe;
use Stripe\Charge;

class DietPlanController extends Controller
{

    public function sellang($lang) {
        $language = ['en', 'cn', 'de', 'el', 'gb', 'es', 'fr', 'it', 'kr', 'no', 'pt', 'us', 'tr', 'ru', 'jp', 'ar','pr', 'se','fi'];
        if(in_array($lang, $language)) {
            App::setlocale($lang);
        } else {
            $lang = 'en';
            App::setlocale('en');
        }
    }
    
    // select Language
    function setLocale() {
        $language = ['en', 'cn', 'de', 'el', 'gb', 'es', 'fr', 'it', 'kr', 'no', 'pt', 'us', 'tr', 'ru', 'jp', 'ar','pr', 'se','fi'];
        $get_ip = UserSystemInfoHelper::get_ip();
        // $ip = '61.75.61.129';  // kr
        $ip = '119.161.100.114';
        // $ip = '113.225.249.218';  //cn
        // $ip = '77.92.76.179'; // uk //GB
        $userLocale = Location::get($ip);
        $lang = $userLocale->countryCode;
        $lang = strtolower($lang);
        if(in_array($lang, $language)) {
            App::setlocale($lang);
        } else {
            $lang = 'en';
            App::setlocale('en');
        }
        
        // return redirect('/'.$lang);
        try {
            DB::connection()->getPdo();
            return redirect('/'.$lang);
        } catch (\Exception $e) {
            return view('dietplan.pageerror');
        }
        
    }
    // end select Language

    // index
    public function index(Request $request, $lang) {
        $this->sellang($lang);
        return view('dietplan.index');
    }
    // end index

    // Stripe Payment
    public function stripePayment(Request $request) {
        \Stripe\Stripe::setApiKey('sk_test_al6B3UwqQCXcor53GowWTWAV00ypvEgX3l');
        $a = $request->input('stripeToken');
        $pricing = $request->input('price')*100;
        $charge = \Stripe\Charge::create([
            'amount' => $pricing,
            'currency' => 'EUR',
            'description' => 'diet plan',
            'source' => $request->get('stripeToken'),
        ]);

        $kCal = $request->input('cal');
        $material = $request->input('material');
        $profile = $request->input('profile');
        $lang = $request->input('locale');
        $email = $request->input('email');
        $link = $request->input('link');
        
        $user_key = uniqid();

        if($pricing == 595) {
            $date_num = 28;
        }
        if($pricing == 1295) {
            $date_num = 84;
        }
        if($pricing == 1995) {
            $date_num = 371;
        } 

        $i = 0;
        while($i < $date_num) {

            $model_name = "diet{$lang}";
            $breakfast = DB::table($model_name)->where('division', '1')->whereIn('material', $material)->get()->random();
            $brunch = DB::table($model_name)->where('division', '2')->whereIn('material', $material)->get()->random();
            $lunch = DB::table($model_name)->where('division', '3')->whereIn('material', $material)->get()->random();

            $sumCal = $breakfast->kcal + $brunch->kcal + $lunch->kcal;
            $rangeMin = $kCal - $sumCal - 100;
            $rangeMax = $kCal - $sumCal + 100;
            $dinnerCount = DB::table($model_name)->where('division', '4')->whereBetween('kcal', [$rangeMin, $rangeMax])->get()->count();
            
            if($dinnerCount == 0) {
                
                $dinner = DB::table($model_name)->where('division', '4')->whereIn('material', $material)->get()->random();
                $results[$i] = [$breakfast, $brunch, $lunch, $dinner];
                $i++;
                
            } else {
                $dinner = DB::table($model_name)->where('division', '4')->whereBetween('kcal', [$rangeMin, $rangeMax])->get()->random();
                    $results[$i] = [$breakfast, $brunch, $lunch, $dinner];
                    $i++;
            }    
        }

        $new_user_key = UserKey::create([
            'user_key' => $user_key
        ]);

        $new_user_profile = UserProfile::create([
            'user_key_num'      => $user_key,
            'kcal'              => $profile[0],
            'water'             => $profile[1],
            'age'               => $profile[2],
            'weight'            => $profile[3],
            'archieve_weight'   => $profile[4],
            'bmi'               => $profile[5]
        ]);

        foreach($results as $result) {

            $new_user_diet_plan = UserDietPlan::create([
                'user_key_num'      => $user_key,
                'country'           => $lang,
                'breakfast'         => $result[0]->id,
                'brunch'            => $result[1]->id,
                'lunch'             => $result[2]->id,
                'dinner'            => $result[3]->id
            ]);
        }

        $link = $link."/showdiet"."/".$user_key."/week/1";
        $link = array(
            'url' =>  $link
        );

        Mail::to($email)->send(new SendMail($link));
        
        $response = response(
            200
        )
        ->header('Content-Type', 'application/json');
    }
    // end Stripe Payment

    //save Diet plan
    public function saveDietPlan( Request $request) {

        $kCal = $request->input('cal');
        $material = $request->input('material');
        $profile = $request->input('profile');
        $lang = $request->input('locale');
        $email = $request->input('email');
        $link = $request->input('link');
        $pricing = $request->input('price');
        if($pricing == 5.95) {
            $date_num = 28;
        }
        if($pricing == 12.95) {
            $date_num = 84;
        }
        if($pricing == 19.95) {
            $date_num = 371;
        } 
        
        $user_key = uniqid();

        $i = 0;
        while($i < $date_num) {

            $model_name = "diet{$lang}";
            $breakfast = DB::table($model_name)->where('division', '1')->whereIn('material', $material)->get()->random();
            $brunch = DB::table($model_name)->where('division', '2')->whereIn('material', $material)->get()->random();
            $lunch = DB::table($model_name)->where('division', '3')->whereIn('material', $material)->get()->random();

            $sumCal = $breakfast->kcal + $brunch->kcal + $lunch->kcal;
            $rangeMin = $kCal - $sumCal - 50;
            $rangeMax = $kCal - $sumCal + 50;
            $dinnerCount = DB::table($model_name)->where('division', '4')->whereBetween('kcal', [$rangeMin, $rangeMax])->get()->count();
            
            if($dinnerCount == 0) {
                
                $dinner = DB::table($model_name)->where('division', '4')->whereIn('material', $material)->get()->random();
                $results[$i] = [$breakfast, $brunch, $lunch, $dinner];
                $i++;
                
            } else {
                $dinner = DB::table($model_name)->where('division', '4')->whereBetween('kcal', [$rangeMin, $rangeMax])->get()->random();
                    $results[$i] = [$breakfast, $brunch, $lunch, $dinner];
                    $i++;
            }    
        }

        $new_user_key = UserKey::create([
            'user_key' => $user_key
        ]);

        $new_user_profile = UserProfile::create([
            'user_key_num'      => $user_key,
            'kcal'              => $profile[0],
            'water'             => $profile[1],
            'age'               => $profile[2],
            'weight'            => $profile[3],
            'archieve_weight'   => $profile[4],
            'bmi'               => $profile[5]
        ]);

        foreach($results as $result) {

            $new_user_diet_plan = UserDietPlan::create([
                'user_key_num'      => $user_key,
                'country'           => $lang,
                'breakfast'         => $result[0]->id,
                'brunch'            => $result[1]->id,
                'lunch'             => $result[2]->id,
                'dinner'            => $result[3]->id
            ]);
        }

        $link = $link."/showdiet"."/".$user_key."/week/1";
        $link = array(
            'url' =>  $link
        );

        Mail::to($email)->send(new SendMail($link));
        
        $response = response(
            200
        )
        ->header('Content-Type', 'application/json');
    }
    // end save Diet plan

    //show diet plan
    public function showDietPlan($lang, $key, $week_num) {

        $this->sellang($lang);

        $userCount = UserKey::where('user_key', $key)->get()->count();
        if($userCount == 0) {
            $result['success'] = false;
            return view('dietplan.pageerror', [
                'error'     => "doesn't exist diet plan!",
                'result'    => $result
            ]);
        }

        $user_profile = UserProfile::where('user_key_num', $key)->first();
        $user_diet_plan = UserDietPlan::where('user_key_num', $key)->get();  
        $user_diet_plan_day = UserDietPlan::where('user_key_num', $key)->count();  
        $day_num = [];
        if($user_diet_plan_day == 28) {
            $day_num = 4;
        } else if($user_diet_plan_day == 84) {
            $day_num = 12;
        } else {
            $day_num = 53;
        }

        $weekCount = 7;
        $breakfast = [];
        $brunch = [];
        $lunch = [];
        $dinner = [];
        $result = [];

        $model_name = "diet{$lang}";
        for($j=0; $j<$weekCount; $j++) {
            $date = ($week_num - 1) * 7 + $j;
            $breakfast[] = DB::table($model_name)->select('id', 'name', 'image_url')->where('id', $user_diet_plan[$date]['breakfast'])->first();
            $brunch[] = DB::table($model_name)->select('id', 'name', 'image_url')->where('id', $user_diet_plan[$date]['brunch'])->first();
            $lunch[] = DB::table($model_name)->select('id', 'name', 'image_url')->where('id', $user_diet_plan[$date]['lunch'])->first();
            $dinner[] = DB::table($model_name)->select('id', 'name', 'image_url')->where('id', $user_diet_plan[$date]['dinner'])->first();                        
        }

        $result['startDate'] = 7 * ($week_num - 1) + 1;
        $result['recipe'][] = $breakfast;
        $result['recipe'][] = $brunch;
        $result['recipe'][] = $lunch;
        $result['recipe'][] = $dinner;
        
        return view('dietplan.result', compact('key'), [
            'profile'      => $user_profile,
            'diet_plan'    => $result,
            'day_num'      => $day_num
        ]);
        
    }
    //end show diet plan

    //show week plan
    public function weekPlan($lang, $key, $week_num) {

        $this->sellang($lang);

        $userCount = UserKey::where('user_key', $key)->get()->count();
        if($userCount == 0) {
            $result['success'] = false;
            return view('dietplan.pageerror', [
                'error'     => "doesn't exist diet plan!",
                'result'    => $result
            ]);
        }

        $user_profile = UserProfile::where('user_key_num', $key)->first();
        $user_diet_plan = UserDietPlan::where('user_key_num', $key)->get();    
        
        $weekCount = 7;
        $breakfast = [];
        $brunch = [];
        $lunch = [];
        $dinner = [];
        $result = [];

        $model_name = "diet{$lang}";
        for($j=0; $j<$weekCount; $j++) {
            $date = ($week_num - 1) * 7 + $j;
            $breakfast[] = DB::table($model_name)->select('id', 'name', 'image_url')->where('id', $user_diet_plan[$date]['breakfast'])->first();
            $brunch[] = DB::table($model_name)->select('id', 'name', 'image_url')->where('id', $user_diet_plan[$date]['brunch'])->first();
            $lunch[] = DB::table($model_name)->select('id', 'name', 'image_url')->where('id', $user_diet_plan[$date]['lunch'])->first();
            $dinner[] = DB::table($model_name)->select('id', 'name', 'image_url')->where('id', $user_diet_plan[$date]['dinner'])->first();                        
        }

        $result['startDate'] = 7 * ($week_num - 1) + 1;
        $result['recipe'][] = $breakfast;
        $result['recipe'][] = $brunch;
        $result['recipe'][] = $lunch;
        $result['recipe'][] = $dinner;

        // Begin return response
        $results = array (
            'success'   => true,
            'messages'  => array('successfully'),
            'data'      => array(
                                    'profile'  => $user_profile,
                                    'diet_plan' => $result
                                )
        );

        $response = response(
                        json_encode($results),
                        200
                    )
                    ->header('Content-Type', 'application/json');

        return $response;
        // End return response
    }
    //end show week plan

    // diet recipe detail
    public function dietDetail($lang, $key, $id, Request $request) {

        $this->sellang($lang);

        $model_recipe_name = "recipe{$lang}";
        $model_ingredients_name = "ingredient{$lang}";
        $model_diet_image = "diet{$lang}";

        $diet_recipes = DB::table($model_recipe_name)->where('diet_id', $id)->get();
        $diet_ingredients = DB::table($model_ingredients_name)->where('diet_id', $id)->get();
        $diet_image = DB::table($model_diet_image)->where('id', $id)->get();

        return view('dietplan.showrecipe', [
            'diet_recipes'        => $diet_recipes,
            'diet_ingredients'    => $diet_ingredients,
            'diet_image'          => $diet_image
        ]);

    }
    // end diet recipe detail

}
