<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Tambah layanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="meForm" action="{{ route('layanan.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama:</label>
                                <input type="text" id="name" name="name"
                                    class="form-control @error('name') is-invalid @enderror" required>
                                @error('name')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi:</label>
                                <textarea id="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="icon" class="form-label">Icon:</label>
                                <input type="text" id="icon" name="icon"
                                    class="form-control @error('icon') is-invalid @enderror">
                            </div>
                            <div class="mb-3">
                                <label for="kd_status" class="form-label">Status:</label>
                                <select id="kd_status" name="kd_status" class="form-control" required>
                                    <option value="" selected disabled>Pilih Status</option>
                                    @foreach ($statuses as $item)
                                        <option value="{{ $item->kd_status }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Tambah layanan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
