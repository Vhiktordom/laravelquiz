@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

           <?php

            $answer1 =  $ans['question_1_answer']; 
            $answer2 =  $ans['question_2_answer'];
            $answer3 =  $ans['question_3_answer'];
            $answer4 =  $ans['question_4_answer'];

            $totalCorrect = 0;

            if($answer1 == 'B') { $totalCorrect++; }
            if($answer2 == 'A') { $totalCorrect++; }
            if($answer3 == 'B') { $totalCorrect++; }
            if($answer4 == 'C') { $totalCorrect++; }

            $quiz = App\Quiz::all();

            $question1 = $quiz[0]->question;
            $question2 = $quiz[1]->question;
            $question3 = $quiz[2]->question;
            $question4 = $quiz[3]->question;

            ?>

            <h2 style="text-align: center;">Quiz Result</h2>

            <br>

           <h4 style="text-align: center;color: green">You answered {{$totalCorrect}} / 4  Answered Correctly</h4> 

            <br>

            @if($answer1 != 'B' || $answer2 != 'A' || $answer3 != 'B' || $answer4 != 'C')
            <h4 style="text-align: center;color: red">Failed Question/Answer</h4>
            @endif


            <center>
                
           

            @if($answer1 != 'B')
            {{$question1}} <br> <h5 style="text-align: center;color: green">The Correct Option is B</h5> <br> @endif
             <br>

            @if($answer2 != 'A')
            {{$question2}} <br> <h5 style="text-align: center;color: green">The Correct Option is A</h5> <br> @endif
             <br>

            @if($answer3 != 'B')
            {{$question3}} <br> <h5 style="text-align: center;color: green">The Correct Option is B</h5> <br> @endif
             <br>

            @if($answer4 != 'C')
            {{$question4}} <br> <h5 style="text-align: center;color: green">The Correct Option is C</h5> <br> @endif

            <a class="btn btn-primary" href="quiz" role="button">Try Again</a>

            </center>




            </div>
        </div>
    </div>
</div>
@endsection
