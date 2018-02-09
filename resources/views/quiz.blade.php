@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">getDev Assessment Quiz</div>

                 
                <form class="form-horizontal" method="POST" action="check">
                    @foreach($quiz as $quizs)
                    <div class="panel-body">
                            {{ csrf_field() }}
                             <h3>{{ $quizs->id}}. {{ $quizs->question }}</h3>
                             <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                     <input type="radio" name="question_{{ $quizs->id }}_answer" value="A" autocomplete="off"> {{ $quizs->first_opt }}
                                  </label>
                                  <label class="btn btn-primary">
                                     <input type="radio" name="question_{{ $quizs->id }}_answer"  id="question_{{ $quizs->id }}_answer_B" value="B" autocomplete="off"> {{ $quizs->second_opt }}
                                  </label>
                                  <label class="btn btn-primary">
                                    <input type="radio" name="question_{{ $quizs->id }}_answer" id="question_{{ $quizs->id }}_answer_C" value="C" autocomplete="off"> {{ $quizs->third_opt }}
                                  </label>
                            </div>
                        </br></br>
                    </div>
                     @endforeach
                     <!-- <a type="button" href="#" class="btn btn-outline-primary pull-right">Submit Question</a> -->
                     <div class="text-center">
                        <input type="submit" class="btn btn-primary" style="text-align: center;" value="Submit Question" />
                     </div>
           </form>
          </div>
         </div>
        </div>
    </div>
@endsection
