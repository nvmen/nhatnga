<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.backend.head')
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    @include('includes.backend.navigator')
    <div id="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@include('includes.backend.footer')
</body>

</html>
