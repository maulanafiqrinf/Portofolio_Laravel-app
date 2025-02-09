<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sertifikat = document.querySelectorAll('#certificate-container .col-lg-4');
        const itemsPerPage = 3;
        let currentPage = 1;

        function displayPage(page) {
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            sertifikat.forEach((certificate, index) => {
                certificate.style.display = (index >= start && index < end) ? 'block' : 'none';
            });
        }

        function setupPagination(totalItems) {
            const totalPages = Math.ceil(totalItems / itemsPerPage);
            const paginationControls = document.getElementById('certificate-pagination-controls');
            paginationControls.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.textContent = i;
                button.className = 'btn btn-sm mx-1 ' + (i === currentPage ? 'btn-success' : 'btn-secondary');
                button.addEventListener('click', function() {
                    currentPage = i;
                    displayPage(currentPage);
                    setupPagination(totalItems);
                });
                paginationControls.appendChild(button);
            }
        }

        displayPage(currentPage);
        setupPagination(sertifikat.length);
    });
</script>