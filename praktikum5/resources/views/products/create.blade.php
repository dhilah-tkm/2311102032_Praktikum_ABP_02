<x-app-layout>
  <div class="max-w-2xl mx-auto py-12">
    <form method="POST" action="{{ route('products.store') }}" class="bg-white p-6 shadow rounded">
      @csrf
      <div class="mb-4">
        <x-input-label for="name" value="Nama Produk" />
        <x-text-input id="name" name="name" type="text" class="block mt-1 w-full" required />
      </div>
      <div class="mb-4">
        <x-input-label for="category" value="Kategori" />
        <x-text-input id="category" name="category" type="text" class="block mt-1 w-full" required />
      </div>
      <div class="flex gap-4">
        <div class="mb-4 flex-1">
          <x-input-label for="stock" value="Stok" />
          <x-text-input id="stock" name="stock" type="number" class="block mt-1 w-full" required />
        </div>
        <div class="mb-4 flex-1">
          <x-input-label for="price" value="Harga" />
          <x-text-input id="price" name="price" type="number" class="block mt-1 w-full" required />
        </div>
      </div>
      <x-primary-button>Simpan Barang</x-primary-button>
    </form>
  </div>
</x-app-layout>