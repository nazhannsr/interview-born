<div id="sb-site">
   

    <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div id="page-wrapper">
        <div class="fixed-header">
            <div id="page-header">
                @include('partials._header')
            </div>
        </div>
        
        <div class="fixed-sidebar">
            <div id="page-sidebar">
                <div class="scroll-sidebar">
                
                @include('partials._sidebar')
                
                </div>
            </div>
        </div>

        <div id="page-content-wrapper">
            <div id="page-content">
                @yield('breadcrumb')
                <div class="container">
                    
                    @include('partials._message')
                    @yield('content')
                </div>
            </div>

        </div>

        @include('partials._footer')
    </div>

</div>