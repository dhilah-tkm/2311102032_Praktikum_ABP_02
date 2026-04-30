<!-- Tombol Delete di dalam Loop Tabel -->
<x-danger-button
    x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'confirm-product-deletion-{{ $product->id }}')"
>
    Hapus
</x-danger-button>

<!-- Modal Konfirmasi -->
<x-modal name="confirm-product-deletion-{{ $product->id }}" focusable>
    <form method="post" action="{{ route('products.destroy', $product->id) }}" class="p-6">
        @csrf @method('delete')
        <h2 class="text-lg font-medium text-gray-900">Apakah yakin ingin menghapus {{ $product->name }}?</h2>
        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">Batal</x-secondary-button>
            <x-danger-button class="ms-3">Hapus Produk</x-danger-button>
        </div>
    </form>
</x-modal>