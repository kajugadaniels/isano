<div class="col-4 col-xl-4 float-right">
    @if (session('success'))
        <script>
            Swal.fire({
                icon: "success",
                text: "{{ session('success') }}",
            });
        </script>
    @endif
</div>
