@if (Session::has('success'))
    <div class="alert alert-info" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
@if (Session::has('warning'))
    <div class="alert alert-warning" role="alert">
        {{ Session::get('warning') }}
    </div>
@endif
@if (Session::has('danger'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('danger') }}
    </div>
@endif

<script>
    // Function to remove alert after 5 seconds
    setTimeout(() => {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            alert.classList.add('fade'); // Add fade effect
            setTimeout(() => alert.remove(), 500); // Remove alert after fade effect
        });
    }, 5000); // 5 seconds delay
</script>
