<?php

use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $users=DB::table("users")->get();

    // $users=DB::table("users")->pluck("name");

    // $users=DB::table("users")->where("name", "=", "Sage Grant DDS")->first();

    // $users=DB::table("users")->where("name", "=", "Sage Grant DDS")->value("email");

    // $users=DB::table("users")->find(1);

    // $comments=DB::table("comments")->select("content as comment_content")->get();

    // $comments=DB::table("comments")->select("user_id")->distinct()->get();

    // ======================== Aggregate Function ========================

    // $result=DB::table("comments")->count();

    // $result=DB::table("comments")->max("user_id");

    // $result=DB::table("comments")->min("user_id");

    // $result=DB::table("comments")->sum("user_id");

    // $result=DB::table("comments")->avg("user_id");

    // $result=DB::table("comments")->where("content", "content")->exists();

    // $result=DB::table("comments")->where("content", "content")->doesntExist();

    // ======================== Where Clause ========================

    // $result=DB::table("rooms")->where("price", "<", 500)->get();

    // $result=DB::table("rooms")->where([
    //    [ "room_size",2],
    //    ["price", "<", 500]
    // ])->get();

    // $result=DB::table("rooms")->where("room_size", 2)->orWhere("price", "<", 500)->get();

    // $result=DB::table("rooms")->where("price", "<", 500)->orWhere(function ($query) {
    //     $query->where("room_size", ">", "1")
    //     ->where("room_size", "<", "4");
    // })->get();

    // $result=DB::table("rooms")->whereBetween("room_size", [1,3])->get();

    // $result=DB::table("rooms")->whereIn("room_size", [1,2,3])->get();

    // $result=DB::table("rooms")->whereNotIn("room_size", [1,2,3])->get();

    // $result=DB::table("rooms")->whereNull("price")->get();

    // $result=DB::table("rooms")->whereNotNull("price")->get();

    // $result=DB::table("rooms")->whereMonth("created_at",now())->get();

    // $result=DB::table("rooms")->whereDate("created_at", now())->get();

    // $result=DB::table("rooms")->whereYear("created_at", now())->get();

    // $result=DB::table("rooms")->whereDay("created_at", now())->get();

    // $result=DB::table("rooms")->whereTime("created_at", now())->get();

    // $result=DB::table("rooms")->whereColumn("room_number", ">", "room_size")->get();

    // $result=DB::table("rooms")->select("id")->whereColumn([
    //     ["room_number", ">", "room_size"],
    //     ["updated_at","created_at"]
    // ])->get();

    // $result=DB::table("users")->whereExists(function ($query) {
    //     $query->select("id")
    //     ->from("reservations")
    //     ->whereRaw("reservations.user_id=users.id")
    //     ->where("check_in", "2022-10-15")
    //     ->limit(1);
    // })->get();

    // ======================== Json Clause ========================

    // $result=DB::table("users")->whereJsonContains("meta->skills", "CSS-3")->get();

    // $result=DB::table("users")->where("meta->settings->site_language", "en")->get();

    // ======================== Pagination ========================

    // $result=DB::table("comments")->paginate(1);

    // $result=DB::table("comments")->simplePaginate(1);

    // ======================== Raw Sql Expression ========================

    // $result=DB::table("comments")
    // ->where("content", "like", "%dolores%")
    // ->whereRaw("content like '%dolores%'")
    // ->get();

    // $result=DB::table("comments")
    // ->selectRaw("count(user_id) as number_of_comments, users.name")
    // // ->select(DB::raw("count(user_id) as number_of_comments, users.name"))
    // ->join("users", "users.id", "=", "comments.user_id")
    // ->groupBy("user_id")
    // ->get();

    // whereRaw / orWhereRaw
    // havingRaw / orHavingRaw
    // orderByRaw
    // groupByRaw

    // =================== Order, Group, Limit, Offset ===================

    // $result=DB::table("users")->orderBy("name", "desc")->get();

    // $result=DB::table("users")->orderBy("name", "desc")->get();

    // $result=DB::table("users")->inRandomOrder()->first();

    // $result=DB::table("comments")
    // ->selectRaw("count(id) as number_of_5stars_comments, rating")
    // ->groupBy("rating")
    // ->where("rating", "=", 5)
    // ->get();

    // $result=DB::table("comments")
    // ->skip(5)
    // ->take(5)
    // ->get();

    // $result=DB::table("comments")
    // ->offset(5)
    // ->limit(5)
    // ->get();

    // =================== Conditional Clauses And Chunking Result ===================

    // $room_id=1;

    // $result=DB::table("reservations")
    // ->when($room_id, function ($query, $room_id) {
    //     return $query->where("room_id", $room_id);
    // })
    // ->get();

    // $sortBy=null;
    // $result=DB::table("reservations")
    // ->when($sortBy, function ($query, $sortBy) {
    //     return $query->orderBy("id", $sortBy);
    // }, function ($query) {
    //     return $query->orderBy("room_id");
    // })
    // ->get();

    // $result=DB::table("comments")->orderBy("id")->chunk(2,function($comments){
    //     foreach($comments as $comment){
    //          if($comment->id==5){
    //              return false;
    //          };
    //     }
    // });

    // Useful for adminstration tasks
    // $result=DB::table("comments")->orderBy("id")->chunkById(2, function ($comments) {
    //     foreach ($comments as $comment) {
    //         DB::table("comments")
    //         ->where("id", $comment->id)
    //         ->update(["rating"=>null]);
    //     }
    // });

    // =================== Insert, Update, Delete Statement ===================

    // $result=DB::table("rooms")->insert([
    //     ["room_number"=>1,"room_size"=>1,"price"=>1,"description"=>"new description 1"],
    //     ["room_number"=>2,"room_size"=>2,"price"=>2,"description"=>"new description 2"]
    // ]);

    // $result=DB::table("rooms")->insertGetId(
    //     ["room_number"=>1,"room_size"=>1,"price"=>1,"description"=>"new description 1"]
    // );

    // $result=DB::table("rooms")->where("id", 1)->update(["price"=>1000]);

    // $result=DB::table("users")->where("id", 1)->update(["meta->settings->site_language"=>"my"]);

    // $affected=DB::table("rooms")->where("id", "1")->increment("price", 5000);

    // $affected=DB::table("rooms")->where("id", "1")->decrement("price", 600, ["description"=>"New Description Hun!"]);

    // $result=DB::table("users")->delete(1);

    // $result=DB::table("users")->where("id", "2")->delete();

    // $result=DB::table("reservations")->truncate();



    // dump($result);
    return view('welcome');
});
