@if(session('success') || session('error'))
<div class="position-fixed top-0 end-0 p-3" style="z-index: 1100;">
    <div class="toast align-items-center text-dark border border-success border-2" 
         style="background-color: {{ session('success') ? '#d1fae5' : '#f8d7da' }};" 
         role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ session('success') ?? session('error') }}
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close" 
                style="filter: invert(0.2); /* buat icon lebih gelap sesuai teks */"></button>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    var toastElList = [].slice.call(document.querySelectorAll('.toast'));
    var toastList = toastElList.map(function(toastEl) {
        return new bootstrap.Toast(toastEl, { delay: 2000 });
    });
    toastList.forEach(toast => toast.show());
});
</script>
@endpush
@endif
