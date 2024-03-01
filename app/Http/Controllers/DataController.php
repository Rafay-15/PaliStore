<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\adminModel;
use App\Models\scrapped_data;
use App\Models\Visit;
use PhpParser\Node\Expr\FuncCall;

class DataController extends Controller
{
    public function getData(Request $request)
    {
        
        if ($request->session()->has('admin')) {
            
        $totalViews = DB::table('visits')->count();
        $totalUsers = DB::table('users')->count();

        return view('adminAnalytics', [
            'totalViews' => $totalViews,
            'totalUsers' => $totalUsers,
        ]);}

        else {
            return view('adminLogin');
            
        }
    }
    public function adminLogin(Request $request) {
        if ($request->isMethod('post')) {
            $user = $request->input('name');
            $userPassword = $request->input('password');
    
            
            $user = adminModel::where('name', $user)->first();
            
            if ($user != null && $userPassword == $user->password) {
                $request->session()->put('admin', $user->name);

                $totalViews = DB::table('visits')->count();
                $totalUsers = DB::table('users')->count();
                $totalProducts = scrapped_data::all()->count();
                $pccProd = scrapped_data::where('link', 'like', '%punjabcashandcarry%')->count();
    
                $cfProd = scrapped_data::where('link', 'like', '%carrefour%')->count();
    
                
    
                return view('adminAnalytics', [
                    'totalViews' => $totalViews,
                    'totalUsers' => $totalUsers,
                    'totalProducts' => $totalProducts,
                    'pccProd' => $pccProd,
                    'cfProd' => $cfProd]);
            } else {
                
                return view('adminLogin');
            }
        }
    }
    public function adminLogout(Request $request) {
        $request->session()->forget('admin');
        
        return view('adminLogin');
    }
    public function checkSessionSignup(Request $request) {
        if ($request->session()->has('admin')) {
            
            $totalViews = DB::table('visits')->count();
            $totalUsers = DB::table('users')->count();
            $totalProducts = scrapped_data::all()->count();
            $pccProd = scrapped_data::where('link', 'like', '%punjabcashandcarry%')->count();

            $cfProd = scrapped_data::where('link', 'like', '%carrefour%')->count();

            

            return view('adminAnalytics', [
                'totalViews' => $totalViews,
                'totalUsers' => $totalUsers,
                'totalProducts' => $totalProducts,
                'pccProd' => $pccProd,
                'cfProd' => $cfProd
            ]);
        }

        else {
            return view('adminLogin');
        }
    }
    public function add(Request $request) {
        if ($request->session()->has('admin')) {
            return view('analyticsAdd');
        }

        else {
            return view('adminLogin');
        }
    }
    public function delete(Request $request) {
        if ($request->session()->has('admin')) {
            return view('analyticDelete');
        }

        else {
            return view('adminLogin');
        }
    }
    public function manage(Request $request) {
        if ($request->session()->has('admin')) {
            return view('analyticsManage');
        }

        else {
            return view('adminLogin');
        }
    }







    // public function getLiveChartData()
    //     {
    //         $data = DB::table('visits')
    //             ->where('created_at', '>', now()->subDays(14))
    //             ->get();
    //             // dd($data);

    //         return response()->json($data);
    //     }


    public function chartData()
    {
        $result = DB::table('visits')
            ->select(DB::raw('DATE(created_at) as day'), DB::raw('COUNT(*) as count'))
            ->groupBy('day')
            ->get();

        $formattedResult = [];

        foreach ($result as $row) {
            $formattedResult[] = ['Day' . count($formattedResult) + 1, $row->count];
        }

        return $formattedResult;
    }
}



