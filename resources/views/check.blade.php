@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

             <?php 

                   foreach ($ans as $value)
                     {
                        $names[] = $value . '<br>';
                     }


                     echo '<pre>';
                        print_r($names[4]);
                     echo '</pre>';

                     $total = 0;

                     if($names[4] == "c"){$total++;}

                     ECHO 'You scored ' . $total . '/' . 4;





                        
                        

            ?>



           

           

            </div>
        </div>
    </div>
</div>
@endsection
