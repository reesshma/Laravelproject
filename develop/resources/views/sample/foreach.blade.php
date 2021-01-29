
<?php $user=[ 
            ['name'=>'reeshu','age'=>'22'],
            ['name'=>'prabha','age'=>'20'],
            ]?>

            @foreach($user as $users)
            <li>{{ $users["name"] }}</li>
            @endforeach
    