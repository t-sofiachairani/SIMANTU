
<label for="mata_kuliah">Mata Kuliah</label>
<div class="mb-3 d-flex align-item-center">
    <select name="mata_kuliah" id="mata_kuliah" class="form-select me-3" wire:model="tugas.matakuliah">
        <option value="">Pilih Ma ta Kuliah</option>
            @foreach ($matakuliahs as $matakuliah)
                <option value="{{ $matakuliah->id }}">{{ $matakuliah->nama }}</option>
            @endforeach
    </select>
    <a wire:click="$emit('openModal')" class="btn btn-secondary" type="submit">Tambah Mata Kuliah</a>
</div>