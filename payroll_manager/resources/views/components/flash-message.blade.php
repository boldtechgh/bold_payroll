@if (session()->has('message'))
    <script>
        $(document).ready(function() {
            var message_toast = {!! json_encode(session('message')) !!};

            displayMessage(message_toast);

            function displayMessage(message) {
                toastr.success(message, "Event");
            }
        })
    </script>
@endif
