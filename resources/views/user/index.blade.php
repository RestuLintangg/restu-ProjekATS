@extends('layout.layout')

@section('main')
    @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <div class="m-4">
        <div class="d-flex justify-content-end m-3">
            <a href="{{ route('dashboard.create') }}#signup" class="btn btn-success ms-2"><i class="fa-solid fa-plus fa-lg"></i>  Tambah data</a>
        </div>

        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Shipping Address</th>
                    <th>Product</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                    <tr>
                        <td>{{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->product }}</td>
                        
                        <td class="text-center">
                            <!-- Rute Edit -->
                            <a href="{{ route('dashboard.edit', $user->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square fa-xs"></i>  Edit</a>

                            <!-- Rute Hapus -->
                            <button type="submit" class="btn btn-primary" onclick="showModalDelete('{{ $user->id }}', '{{ $user->name }}')">Kirim   <i class="fa-solid fa-share fa-xs"></i></button>

        <!-- Modal Konfirmasi Delete (unikan setiap modal dengan ID) -->
        <div class="modal fade" id="modalDelete{{ $user->id }}" tabindex="-1" aria-labelledby="modalDeleteLabel{{ $user->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" method="POST" action="{{ route('user.destroy', $user->id) }}">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDeleteLabel{{ $user->id }}">KONFIRMASI PENGIRIMAN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah pesanan dari <strong>{{ $user->name }}</strong> sudah dikirim?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Belum</button>
                        <button type="submit" class="btn btn-danger">Sudah</button>
                    </div>
                </form>
            </div>
        </div>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-5 d-flex justify-content-center">
        {{ $users->links() }} 
    </div>
@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    function showModalDelete(id, name) {
        $('#modalDelete' + id).modal('show');  // Tampilkan modal berdasarkan ID
    }
</script>
@endpush
