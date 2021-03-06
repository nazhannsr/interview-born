@stack('before-scripts')
<!-- WIDGETS -->

<script type="text/javascript" src="{{ asset('/assets/bootstrap/js/bootstrap.js') }}"></script>

<!-- Bootstrap Dropdown -->

{{-- <script type="text/javascript" src="{{ asset('/assets/widgets/dropdown/dropdown.js') }}"></script> --}}

<!-- Bootstrap Tooltip -->

{{-- <script type="text/javascript" src="{{ asset('/assets/widgets/tooltip/tooltip.js') }}"></script> --}}

<!-- Bootstrap Popover -->

{{-- <script type="text/javascript" src="{{ asset('/assets/widgets/popover/popover.js') }}"></script> --}}

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="{{ asset('/assets/widgets/progressbar/progressbar.js') }}"></script>

<!-- Bootstrap Buttons -->

{{-- <script type="text/javascript" src="{{ asset('/assets/widgets/button/button.js') }}"></script> --}}

<!-- Bootstrap Collapse -->

 {{-- <script type="text/javascript" src="{{ asset('/assets/widgets/collapse/collapse.js') }}"></script> --}}

<!-- Superclick -->

<script type="text/javascript" src="{{ asset('/assets/widgets/superclick/superclick.js') }}"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="{{ asset('/assets/widgets/input-switch/inputswitch-alt.js') }}"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="{{ asset('/assets/widgets/slimscroll/slimscroll.js') }}"></script>

<!-- Slidebars -->

<script type="text/javascript" src="{{ asset('/assets/widgets/slidebars/slidebars.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/widgets/slidebars/slidebars-demo.js') }}"></script>


<!-- Screenfull -->

<script type="text/javascript" src="{{ asset('/assets/widgets/screenfull/screenfull.js') }}"></script>

<!-- Content box -->

<script type="text/javascript" src="{{ asset('/assets/widgets/content-box/contentbox.js') }}"></script>

<!-- Overlay -->

<script type="text/javascript" src="{{ asset('/assets/widgets/overlay/overlay.js') }}"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="{{ asset('/assets/js-init/widgets-init.js') }}"></script>

<!-- Theme layout -->

<script type="text/javascript" src="{{ asset('/assets/themes/admin/layout.js') }}"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="{{ asset('/assets/widgets/theme-switcher/themeswitcher.js') }}"></script>

<script>
    $("#toTop").click(function () {
            console.log('test');
        //1 second of animation time
        //html works for FFX but not Chrome
        //body works for Chrome but not FFX
        //This strange selector seems to work universally
        $("html, body").animate({scrollTop: 0}, 1000);
        });
</script>
@stack('after-scripts')
