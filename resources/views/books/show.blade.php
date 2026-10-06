@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
<div class="bg-white rounded-lg shadow p-6 max-w-2xl mx-auto">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-gray-800">Detail Buku</h1>
        <a href="{{ route('books.index') }}" class="text-blue-600 hover:underline">← Kembali</a>
    </div>

    <dl class="divide-y divide-gray-200">
        <div class="py-3 grid grid-cols-3">
            <dt class="font-semibold text-gray-700">Judul</dt>
            <dd class="col-span-2">{{ $book->title }}</dd>
        </div>
        <div class="py-3 grid grid-cols-3">
            <dt class="font-semibold text-gray-700">Penulis</dt>
            <dd class="col-span-2">{{ $book->author }}</dd>
        </div>
        <div class="py-3 grid grid-cols-3">
            <dt class="font-semibold text-gray-700">Penerbit</dt>
            <dd class="col-span-2">{{ $book->publisher }}</dd>
        </div>
        <div class="py-3 grid grid-cols-3">
            <dt class="font-semibold text-gray-700">Tahun Terbit</dt>
            <dd class="col-span-2">{{ $book->year }}</dd>
        </div>
        <div class="py-3 grid grid-cols-3">
            <dt class="font-semibold text-gray-700">Stok</dt>
            <dd class="col-span-2">{{ $book->stock }} buku</dd>
        </div>
        <div class="py-3 grid grid-cols-3">
            <dt class="font-semibold text-gray-700">Kategori</dt>
            <dd class="col-span-2">
                <span class="bg-blue-100 text-blue-800 text-sm px-2 py-1 rounded">
                    {{ $book->category->name }}
                </span>
                <p class="text-xs text-gray-500 mt-1">{{ $book->category->description }}</p>
            </dd>
        </div>
        <div class="py-3 grid grid-cols-3">
            <dt class="font-semibold text-gray-700">Dibuat</dt>
            <dd class="col-span-2 text-sm text-gray-600">{{ $book->created_at->format('d M Y H:i') }}</dd>
        </div>
    </dl>

    <div class="flex gap-2 mt-6">
        <a href="{{ route('books.edit', $book) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Edit</a>
        <form action="{{ route('books.destroy', $book) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
            @csrf
            @method('DELETE')
            <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">Hapus</button>
        </form>
    </div>
</div>
@endsection