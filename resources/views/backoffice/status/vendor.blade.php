kategori<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            paging: true, // Mengaktifkan fitur pagination
            lengthChange: true, // Mengizinkan pengguna memilih jumlah data per halaman
            searching: true, // Mengaktifkan fitur pencarian
            ordering: true, // Mengaktifkan fitur pengurutan
            info: true, // Menampilkan informasi tentang jumlah data
            autoWidth: false, // Menonaktifkan pengaturan lebar otomatis
            pageLength: 10, // Menentukan jumlah data default per halaman
            language: {
                paginate: {
                    previous: "Sebelumnya",
                    next: "Berikutnya"
                },
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ data per halaman",
                info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ data",
                infoEmpty: "Tidak ada data tersedia",
                zeroRecords: "Data tidak ditemukan",
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.delete-btn').on('click', function(e) {
            e.preventDefault();
            var url = $(this).data('url');

            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            // Refresh halaman atau hapus baris tabel
                            location.reload();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan saat menghapus data');
                    }
                });
            }
        });
    });
</script>
