<html>
@include('layout.header.header')

<body>

<!--Main layout-->
<main style="margin-top: 86px">
    @include("layout.breadcrum.breadcrum")
    @include($page, $data)
</main>
<!--Main layout-->
<!-- MDB -->
<script type="text/javascript" src="{{URL::to('/')}}/js/mdb.min.js"></script>
<!-- Custom scripts -->
<script src="{{URL::to('/')}}/js/socket/socket.js"></script>
<script src="{{URL::to('/')}}/js/api/api.js"></script>
</body>
@include('layout.footer.footer')

</html>
