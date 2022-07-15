 
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-m text-gray-800 leading-tight">
            {{ __('DATA BARANG') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <h3>Edit Data Barang</h3>
        <form action="{{ url('/menu') }}" method="POST">
        @csrf
        <div class="grid grid-cols-2 gap-6">
        <div class="grid grid-rows-2 gap-6">
        <div>
        <x-label>NAMA BARANG</x-label>
        <x-input type="text" class="block mt-1 w-full" name="menu_nama"></x-input>
        </div>
        <div>
        <x-label>HARGA BARANG</x-label>
        <x-input type="text" class="block mt-1 w-full" name="menu_harga"></x-input>
        </div>
        <div>
        <x-label>STOK BARANG</x-label>
        <x-input type="text" class="block mt-1 w-full" name="menu_stok"></x-input>
        </div>
 <div>
    <x-button class="ml-3">
    {{ __('Edit') }}
    </x-button>
    </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

                
</x-app-layout>
