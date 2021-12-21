<?php
use App\Http\Controllers\CategoryController;
$categories = CategoryController::categories();

?>


<nav class="menus">
    <div class="container-fluid">
        <ul>
            @foreach ($categories as $category)
                <li><a href="/c/{{$category -> id}}">{{$category -> name}}</a></li>
            @endforeach
        </ul>
    </div>
</nav>
