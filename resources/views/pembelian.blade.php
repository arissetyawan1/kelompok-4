<x-app>
      <div class="container">
        <a class="btn btn-primary pl-14 mb-3" href="{{ route('insert-pembelian') }}">
            Tambah Barang
        </a>
         <div class="row">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Jumlah Beli</th>
                            <th scope="col">Tanggal Beli</th>
                            <th scope="col">Total Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($data as $barang)
                        <tbody>
                            <tr>
                                <th>{{ $barang->barang_id }}</th>
                                <td>{{ $barang->user_id }}</td>
                                <td>{{ $barang->jumlah_beli }}</td>
                                <td>{{ $barang->tanggal_beli }}</td>
                                <td>{{ $barang->total_harga }}</td>
                                <td>
                                    <form action='{{ route('pembelian.delete', $barang->id) }}' method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fa fa-trash"></i></button>
                                    </form>

                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
                <div class="d-flex justify-content-center">
                    {!! $data->links() !!}
                </div>
            </div>
        </div>
      </div>
</x-app>
