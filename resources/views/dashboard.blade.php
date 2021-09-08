<x-app>
    <!-- Button trigger modal -->
    <div class="container">
        <a class="btn btn-primary pl-14 mb-3" href="{{ route('insert-barang') }}">
            Tambah Barang
        </a>
        <div class="row">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Harga Barang</th>
                            <th scope="col">Stock Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($data as $barang)
                        <tbody>
                            <tr>
                                <th>{{ $barang->barang_name }}</th>
                                <td>{{ $barang->barang_jenis }}</td>
                                <td>{{ $barang->barang_harga }}</td>
                                <td>{{ $barang->barang_stock }}</td>
                                <td>
                                    <form action='{{ route('delete.barang', $barang->id) }}' method="POST">
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('barang.edit', $barang->id) }}"><i
                                                class="fa fa-edit"></i></a>
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
