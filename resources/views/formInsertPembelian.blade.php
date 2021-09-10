<x-app>
    <div class="container">
        <form action="{{ route('pembelian.insert') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Barang</label>
                        <input type="text" class="form-control" name="barang_nama">
                        @error('barang_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama User</label>
                        <input type="text" class="form-control" name="nama_user" id="exampleInputPassword1">
                        @error('user_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga Barang</label>
                        <input type="text" class="form-control" name="harga" id="exampleInputPassword1">
                        @error('user_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jumlah Beli</label>
                        <input type="text" class="form-control" name="jumlah_beli" id="exampleInputPassword1">
                        @error('barang_harga')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Beli</label>
                        <input type="date" class="form-control" name="tanggal_beli" id="exampleInputPassword1">
                        @error('barang_stock')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Total Harga</label>
                        <input type="text" class="form-control" name="total_harga" id="exampleInputPassword1">
                        @error('total_harga')
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
