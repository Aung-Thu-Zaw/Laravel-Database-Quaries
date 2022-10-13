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
    // try {
    //     $dbc = new PDO('mysql:host='.env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'));
    //     $charset = config('database.connections.mysql.charset');
    //     $collation = config('database.connections.mysql.collation');
    //     $query = "CREATE DATABASE IF NOT EXISTS ". env('DB_DATABASE') . " CHARACTER SET $charset COLLATE $collation;";
    //     $dbc->exec($query);
    // } catch (PDOException $e) {
    //     echo $e->getMessage();
    // }



    // This query is for mysql
    // $user=DB::select("select * from users where id = ?", [1]);

    // This query is for sqlite
    // $users=DB::connection("sqlite")->select("select * from users");

    // @dd("mysql", $user);
    // @dd("sqlite", $users);

    // ==========================================================

    // $pdo = DB::connection(/*'sqlite'*/)->getPdo();
    // $users = $pdo->query('select * from users')->fetchAll();

    // $result = DB::select('select * from users where id = ? and name = ?', [1, 'Adalberto Gerlach']);
    // $result = DB::select('select * from users where id = :id', ['id' => 1]);

    // DB::insert('insert into users (name, email,password) values (?, ?, ?)', ['Inserted Name', 'email@fdf.fd','passw']);

    // $affected = DB::update('update users set email = "updatedemail@email.com" where email = ?', ['email@fdf.fd']);

    // $deleted = DB::delete('delete from users where id = ?',[4]);

    // DB::statement('truncate table users');

    // $result = DB::select('select * from users');


    // +++++++++++++QueryBuilder Style Query++++++++++++++
    // $result = DB::table('users')->select()->get();

    // +++++++++++++ElquentORM Style Query++++++++++++++
    // $result = User::all();

    // @dd($result);

    // ==========================================================
    // DB::transaction(function () {
    //     try {
    //         DB::table('users')->delete();
    //         $result=DB::table("users")->where("id", 4)->update(["email"=>"none"]);

    //         if (!$result) {
    //             throw new Exception();
    //         }
    //     } catch(Exception $err) {
    //         DB::rollBack();
    //     }

    // DB::table("users")->where("id", 3)->update(["email"=>"none@none.none"]);

    // }, 5);

    // $result = DB::table('users')->select()->get();

    // $result = User::all();
    // @dd($result);

    // ==========================================================

    @dd(Comment::factory(3)->create());

    return view('welcome');
});
