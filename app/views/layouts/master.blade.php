<?php
/**
 * Created by JetBrains PhpStorm.
 * User: eder
 * Date: 12/02/14
 * Time: 09:40 PM
 * To change this template use File | Settings | File Templates.
 */
?>

<html>
<head>
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/angular.js') }}
    {{ HTML::script('js/angular-bootstrap.js') }}
</head>
<body>
<div class="container">
    @section('sidebar')
    Prueba larevel 4 <br>
    @show
    @yield('content')

</div>
<div>

</div>
</body>
</html>