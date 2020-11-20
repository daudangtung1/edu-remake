<!DOCTYPE html>
<html>
@include('admin.layouts.head')

<body>
<div class="app header-default side-nav-dark">
    <div class="layout">
        <!-- Header START -->
        @include('admin.layouts.header')
        <!-- Header END -->

        <!-- Side Nav START -->
        @include('admin.layouts.sidebar')
        <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">
            <!-- Quick View START -->
                @include('admin.layouts.left-sidebar')
            <!-- Side Panel END -->

            <!-- Content Wrapper START -->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- Content Wrapper END -->

            <!-- Footer START -->
                @include('admin.layouts.footer')
            <!-- Footer END -->

        </div>
        <!-- Page Container END -->

    </div>
</div>

<script src="{{asset('admin/assets/js/vendor.js')}}"></script>

<script src="{{asset('admin/assets/js/app.min.js')}}"></script>

<!-- page js -->
<script src="{{asset('admin/assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('admin/assets/js/dashboard/default.js')}}"></script>
<script src="{{asset('admin/assets/vendor/datatables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/js/tables/data-table.js')}}"></script>

</body>

</html>
