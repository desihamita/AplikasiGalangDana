<x-modal size="modal-lg ">
    <x-slot name="title">
        Tambah
    </x-slot>

    @method('post')
    <div class="form-group mb-3">
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="email">Email</label>
        <input type="emai" name="email" id="email" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="password_confirmation">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
    </div>

    <x-slot name="footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" onclick="submitForm(this.form)">Simpan</button>
    </x-slot>
</x-modal>
