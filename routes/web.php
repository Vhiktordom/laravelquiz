<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('profile', 'UserController@profile')->middleware('auth');
Route::post('profile', 'UserController@update_avatar')->middleware('auth');
Route::get('quiz', 'UserController@quiz');
Route::post('check', 'UserController@check');

Route::get('answers', function(){
	$answers = App\Answer::all();
	// foreach($answers as $answer){

	// 	//echo $answer->question_number . '</br>';

	// 	// echo  $answer->question_number . " &nbsp; " . $answer->question_answer . " &nbsp; " . " Question:  " . $answer->quiz->question . '<br>';

	// 	//echo "Question: " . $answer->quiz->question . " &nbsp; Answer: " . $answer->question_answer . '<br>';




	// }

	$answer1 = $answers[0]->question_number;
	$answer2 = $answers[1]->question_number;
	$answer3 = $answers[2]->question_number;
	$answer4 = $answers[3]->question_number;

	$correct1 = $answers[0]->correct_answer;
	$correct2 = $answers[1]->correct_answer;
	$correct3 = $answers[2]->correct_answer;
	$correct4 = $answers[3]->correct_answer;

	$qanswer = $answers[0]->question_answer;
	$qanswer1 = $answers[1]->question_answer;
	$qanswer2 = $answers[2]->question_answer;
	$qanswer3 = $answers[3]->question_answer;
	
	echo $answer1 . '<br>';
	echo $answer2 . '<br>';
	echo $answer3 . '<br>';
	echo $answer4 . '<br>';

	echo '<br>'.'<br>';

	echo $correct1 . '<br>';
	echo $correct2 . '<br>';
	echo $correct3 . '<br>';
	echo $correct4 . '<br>';

	echo '<br>'.'<br>';

	echo $qanswer . '<br>';
	echo $qanswer1 . '<br>';
	echo $qanswer2 . '<br>';
	echo $qanswer . '<br>';

	$totalCorrect = 0;

	if($answer1 == $correct1) { $totalCorrect++;}
	if($answer2 == $correct2) { $totalCorrect++;}
	if($answer3 == $correct3) { $totalCorrect++;}
	if($answer4 == $correct4) { $totalCorrect++;}

	echo '<br>'.'<br>';

	echo $totalCorrect . '/' . '5' . ' Answered Correctly';



});

Route::get('/home', 'HomeController@index')->name('home');


//Facebook SocialLite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
