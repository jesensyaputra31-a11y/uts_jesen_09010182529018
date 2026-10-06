@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Buku</h1>
        <a href="{{ route('books.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            + Tambah Buku
        </a>
    </div>

    <form method="GET" class="flex gap-2 mb-4">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari judul / penulis..."
               class="flex-1 border border-gray-300 rounded px-3 py-2">
        <select name="category_id" class="border border-gray-300 rounded px-3 py-2">
            <option value="">Semua Kategori</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ request('category_id') == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
        <button class="bg-gray-700 hover:bg-gray-800 text-white px-4 py-2 rounded">Cari</button>
        @if(request()->hasAny(['search', 'category_id']))
            <a href="{{ route('books.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">Reset</a>
        @endif
    </form>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="border px-3 py-2">#</th>
                    <th class="border px-3 py-2">Judul</th>
                    <th class="border px-3 py-2">Penulis</th>
                    <th class="border px-3 py-2">Kategori</th>
                    <th class="border px-3 py-2">Tahun</th>
                    <th class="border px-3 py-2">Stok</th>
                    <th class="border px-3 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($books as $book)
                <tr class="hover:bg-gray-50">
                    <td class="border px-3 py-2">{{ $loop->iteration + ($books->currentPage()-1) * $books->perPage() }}</td>
                    <td class="border px-3 py-2 font-medium">{{ $book->title }}</td>
                    <td class="border px-3 py-2">{{ $book->author }}</td>
                    <td class="border px-3 py-2">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">
                            {{ $book->category->name }}
                        </span>
                    </td>
                    <td class="border px-3 py-2">{{ $book->year }}</td>
                    <td class="border px-3 py-2">{{ $book->stock }}</td>
                    <td class="border px-3 py-2">
                        <div class="flex gap-1 justify-center">
                            <a href="{{ route('books.show', $book) }}" class="bg-gray-500 hover:bg-gray-600 text-white text-xs px-2 py-1 rounded">Detail</a>
                            <a href="{{ route('books.edit', $book) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white text-xs px-2 py-1 rounded">Edit</a>
                            <form action="{{ route('books.destroy', $book) }}" method="POST" onsubmit="return confirm('Yakin hapus buku ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-600 hover:bg-red-700 text-white text-xs px-2 py-1 rounded">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center py-6 text-gray-500">Belum ada data buku.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">{{ $books->links() }}</div>
</div>
@endsection