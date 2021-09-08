<x-app>
    <div class="container">
        <form action="{{ route('barang.insert') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Barang </label>
                        <input type="text" class="form-control" name="barang_name">
                        @error('barang_name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jenis Barang</label>
                        <input type="text" class="form-control" name="barang_jenis" id="exampleInputPassword1">
                        @error('barang_jenis')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga Barang</label>
                        <input type="text" class="form-control" name="barang_harga" id="exampleInputPassword1">
                        @error('barang_harga')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Stok Barang</label>
                        <input type="text" class="form-control" name="barang_stock" id="exampleInputPassword1">
                        @error('barang_stock')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Barang</button>
                </div>
            </div>
        </form>
    </div>


</x-app>
