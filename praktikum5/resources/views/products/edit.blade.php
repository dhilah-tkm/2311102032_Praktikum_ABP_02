<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Edit Produk: ' . $product->name) }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

        <form method="POST" action="{{ route('products.update', $product->id) }}">
          @csrf
          @method('PATCH') <!-- Sangat Penting untuk Update -->

          <!-- Nama Produk -->
          <div class="mb-4">
            <x-input-label for="name" :value="__('Nama Produk')" />
            <x-text-input id="name" name="name" type="text" class="block mt-1 w-full" :value="old('name', $product->name)" required />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
          </div>

          <!-- Kategori -->
          <div class="mb-4">
            <x-input-label for="category" :value="__('Kategori')" />
            <x-text-input id="category" name="category" type="text" class="block mt-1 w-full" :value="old('category', $product->category)" required />
            <x-input-error :messages="$errors->get('category')" class="mt-2" />
          </div>

          <div class="flex gap-4">
            <!-- Stok -->
            <div class="mb-4 flex-1">
              <x-input-label for="stock" :value="__('Stok')" />
              <x-text-input id="stock" name="stock" type="number" class="block mt-1 w-full" :value="old('stock', $product->stock)" required />
              <x-input-error :messages="$errors->get('stock')" class="mt-2" />
            </div>

            <!-- Harga -->
            <div class="mb-4 flex-1">
              <x-input-label for="price" :value="__('Harga')" />
              <x-text-input id="price" name="price" type="number" class="block mt-1 w-full" :value="old('price', $product->price)" required />
              <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>
          </div>

          <div class="flex items-center justify-end mt-4">
            <a href="{{ route('products.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
            <x-primary-button>
              {{ __('Update Barang') }}
            </x-primary-button>
          </div>
        </form>

      </div>
    </div>
  </div>
</x-app-layout>