<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Inventori Toko Mas Wowo</h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white p-6 shadow sm:rounded-lg">
        <div class="mb-4">
          <a href="{{ route('products.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            + Tambah Produk
          </a>
        </div>

        <table class="w-full border-collapse border border-gray-200">
          <thead>
            <tr class="bg-gray-100">
              <th class="border p-2">Nama</th>
              <th class="border p-2">Kategori</th>
              <th class="border p-2">Stok</th>
              <th class="border p-2">Harga</th>
              <th class="border p-2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
              <tr>
                <td class="border p-2">{{ $product->name }}</td>
                <td class="border p-2">{{ $product->category }}</td>
                <td class="border p-2 text-center">{{ $product->stock }}</td>
                <td class="border p-2">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                <td class="border p-2 text-center">
                  <a href="{{ route('products.edit', $product->id) }}"
                    class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>

                  <!-- Tombol Hapus memicu Modal -->
                  <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'del-{{ $product->id }}')">
                    Hapus
                  </x-danger-button>

                  <!-- Modal Konfirmasi -->
                  <x-modal name="del-{{ $product->id }}" focusable>
                    <form method="post" action="{{ route('products.destroy', $product->id) }}" class="p-6">
                      @csrf @method('delete')
                      <h2 class="text-lg font-medium text-gray-900">Hapus {{ $product->name }}?</h2>
                      <div class="mt-6 flex justify-end">
                        <x-secondary-button x-on:click="$dispatch('close')">Batal</x-secondary-button>
                        <x-danger-button class="ms-3">Ya, Hapus</x-danger-button>
                      </div>
                    </form>
                  </x-modal>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-app-layout>