<div class="content-wrapper">
    <section class="content-header">
        @yield('pageHeader', '<h1>Dashboard</h1>')

        @hasSection ('breadcrumb')
            @yield('breadcrumb')
        @else
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        @endif
    </section>
    <section class="content">
        @yield('content')
    </section>
</div>