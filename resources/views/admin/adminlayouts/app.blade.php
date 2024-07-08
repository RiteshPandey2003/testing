<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link href="" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="" sizes="128x128" rel="shortcut icon" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ace-responsive-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashbord_navitaion.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&family=Poppins:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <!-- Additional Scripts -->
    <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script src="{{ asset('js/chart-custome.js') }}"></script>
    <script src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
    <script src="{{ asset('js/ace-responsive-menu.js') }}"></script>
    <script src="{{ asset('js/parallax.js') }}"></script>
    <script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/range-slider.js') }}"></script>
    <script src="{{ asset('js/dashboard-script.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Buyer Dashboard Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- Page Specific Scripts -->
    @yield('scripts')

</head>

<body data-spy="scroll">

    @include('admin.adminlayouts.buyer-header')

    <main>
        @yield('content')
    </main>

    @include('admin.adminlayouts.buyer-footer')

    <!-- Custom Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Initialize DataTables
            $('#buyersTable').DataTable();

            // Chart initialization
            new Chart(document.getElementById("chartjs-dashboard-pie"), {
                type: "pie",
                data: {
                    labels: ["Direct", "Affiliate", "E-mail", "Other"],
                    datasets: [{
                        data: [2602, 1253, 541, 1465],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.warning,
                            window.theme.danger,
                            "#E8EAED"
                        ],
                        borderWidth: 5,
                        borderColor: window.theme.white
                    }]
                },
                options: {
                    responsive: !window.MSInputMethodContext,
                    maintainAspectRatio: false,
                    cutoutPercentage: 70,
                    legend: {
                        display: false
                    }
                }
            });
        });

        // Dropdown menu toggle
        var dropdown = document.getElementsByClassName("dropdown-btn-admin-dashboard-sidebar");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>

</body>

</html>
