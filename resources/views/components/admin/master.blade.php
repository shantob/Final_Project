<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> {{ $title }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/admin/summernote/summernote-lite.min.css') }}">

    <!-- dropify -->
    <link rel="stylesheet" href="{{ asset('assets/admin/dropify/css/dropify.min.css') }}">

    <!-- tags -->
    <link rel="stylesheet" href="{{ asset('assets/admin/tags/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/ready.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="wrapper">
        <x-admin.partials.header />
        <!--  -->


        <x-admin.partials.sideber />

        <!-- body -->
        {{ $slot }}
        <!-- end content body -->
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
                    <p>
                        <b>We'll let you know when it's done</b>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('assets/admin/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<!-- summernote -->
<script src="{{ asset('assets/admin/summernote/summernote-lite.min.js') }}"></script>

<!-- dropify -->
<script src="{{ asset('assets/admin/dropify/js/dropify.min.js') }}"></script>
<!-- tags -->
<script src="{{ asset('assets/admin/tags/bootstrap-tagsinput.js') }}"></script>

<!-- custom them -->
<script src="{{ asset('assets/admin/js/ready.min.js') }}"></script>

<script src="{{ asset('assets/admin/summernote/summernote-lite.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- dropify -->
<script src="{{ asset('assets/admin/dropify/js/dropify.min.js') }}"></script>
<script>
    $('#description').summernote({
        placeholder: 'Write your Product Description here.............',
        height: 325
    });
    $('#image').dropify({});
</script>
@if (session('success'))
    <script>
        swal({
            title: "Good job!",
            text: " {{ session('success') }}",
            icon: "success",
        });
    </script>
@endif

<script type="text/javascript">
    function searchFun() {
        let filter = document.getElementById('product_search').value.toUpperCase();
        let product = document.getElementById('product_table');
        let tr = product.getElementsByTagName('tr');
        for (var i = 0; i < tr.length; i++) {
            let td = tr[i].getElementsByTagName('td')[1];

            if (td) {
                let textValue = td.textContent || td.innerHTML;

                if (textValue.toUppercase().indexOf(filter) > -1) {
                    tr[1].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#search').keyup(function() {
            var search = $('#search').val();
            if (search == "") {
                $("#memList").html("");
                $('#result').hide();
            } else {
                $.get("{{ URL::to('search') }}", {
                    search: search
                }, function(data) {
                    $('#memList').empty().html(data);
                    $('#result').show();
                })
            }
        });
    });
</script>

</html>
