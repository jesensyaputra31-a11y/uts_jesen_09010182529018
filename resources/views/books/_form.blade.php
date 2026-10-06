@if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded">
        <ul class="list-disc list-inside text-sm">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Judul *</label>
    <input type="text" name="title" value="{{ old('title', $book->title ?? '') }}" required
           class="w-full border border-gray-300 rounded px-3 py-2">
</div>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Penulis *</label>
    <input type="text" name="author" value="{{ old('author', $book->author ?? '') }}" required
           class="w-full border border-gray-300 rounded px-3 py-2">
</div>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Penerbit *</label>
    <input type="text" name="publisher" value="{{ old('publisher', $book->publisher ?? '') }}" required
           class="w-full border border-gray-300 rounded px-3 py-2">
</div>

<div class="grid grid-cols-2 gap-4">
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Tahun Terbit *</label>
        <input type="number" name="year" value="{{ old('year', $book->year ?? date('Y')) }}" required min="1900" max="{{ date('Y') }}"
               class="w-full border border-gray-300 rounded px-3 py-2">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Stok *</label>
        <input type="number" name="stock" value="{{ old('stock', $book->stock ?? 0) }}" required min="0"
               class="w-full border border-gray-300 rounded px-3 py-2">
    </div>
</div>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Kategori *</label>
    <select name="category_id" required class="w-full border border-gray-300 rounded px-3 py-2">
        <option value="">-- Pilih Kategori --</option>
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}"
                {{ old('category_id', $book->category_id ?? '') == $cat->id ? 'selected' : '' }}>
                {{ $cat->name }}
            </option>
        @endforeach
    </select>
</div>