<div class="form-group">
    <label for="path_image">Pilih salah satu foto untuk penggalangan danamu</label>
    <div class="custom-file">
        <input type="file" name="path_image" class="custom-file-input" id="path_image">
        <label class="custom-file-label" for="path_image">Choose file</label>
    </div>
    <small class="text-muted d-block">Format foto harus: (jpg, png, jpeg)</small>
        <img src="" class="img-thumbnail preview-path_image w-50" style="display: none;">
</div>
<div class="form-group">
    <button type="button" class="btn btn-outline-primary" onclick="stepper.previous()">Sebelumnya</button>
    <button type="button" class="btn btn-primary" onclick="stepper.next()">Selanjutnya</button>
</div>