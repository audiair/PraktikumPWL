<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Form Tambah Buku') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('book.store') }}" 
                    enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        <div>
                            <x-input-label for="title" :value="__('JUDUL')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-1/2" :value="old('title')" required/>
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div>
                            <x-input-label for="author" :value="__('PENULIS')" />
                            <x-text-input id="author" name="author" type="text" class="mt-1 block w-1/2" :value="old('author')" required/>
                            <x-input-error class="mt-2" :messages="$errors->get('author')" />
                        </div>
                        <div>
                            <x-input-label for="year" :value="__('TAHUN TERBIT')" />
                            <x-text-input id="year" name="year" type="number" class="mt-1 block w-1/2" :value="old('year')" required/>
                            <x-input-error class="mt-2" :messages="$errors->get('year')" />
                        </div>
                        <div>
                            <x-input-label for="publisher" :value="__('PENERBIT')" />
                            <x-text-input id="publisher" name="publisher" type="text" class="mt-1 block w-1/2" :value="old('publisher')" required/>
                            <x-input-error class="mt-2" :messages="$errors->get('publisher')" />
                        </div>
                        <div>
                            <x-input-label for="city" :value="__('KOTA TERBIT')" />
                            <x-text-input id="city" name="city" type="text" class="mt-1 block w-1/2" :value="old('city')" required/>
                            <x-input-error class="mt-2" :messages="$errors->get('city')" />
                        </div>
                        <div>
                            <x-input-label for="quantity" :value="__('JUMLAH BUKU')" />
                            <x-text-input id="city" name="quantity" type="number" class="mt-1 block w-1/2" :value="old('quantity')" required/>
                            <x-input-error class="mt-2" :messages="$errors->get('quantity')" />
                        </div> 
                        <div>
                            <x-input-label for="bookshelf" :value="__('KATEGORI RAK BUKU')" />
                            <x-select-input id="bookshelf" name="bookshelf_id" class="mt-1 block w-1/2" required>
                                <option value="">Open this select menu</option>
                                @foreach($bookshelves as $key => $value)
                                    @if(old('bookshelf_id') == $key)
                                    <option value="{{ $key }}" selected>{{ $value }}</option>
                                    @else
                                    <option value="{{ $key }}">{{ $value }}</option>
                                    @endif
                                @endforeach
                            </x-select-input>
                            <x-input-error class="mt-2" :messages="$errors->get('bookshelf_id')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="cover" value="Halaman Sampul Depan"/>
                                <x-file-input id="cover" name="cover" class="mt-1-block w-full"/>
                            <x-input-error class="mt-2" :messages="$errors->get('cover')"/>
                        </div>

                        <x-secondary-button tag="a" href="{{route('book')}}">
                            Cancel
                        </x-secondary-button>
                        <x-primary-button name="save_and_create" value="true">
                            Save & Create Another
                        </x-primary-button>
                        <x-primary-button name="save" value="true">
                            Save
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
