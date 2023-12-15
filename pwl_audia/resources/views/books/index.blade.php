<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <!-- CONTENT HERE -->
                   <x-primary-button tag="a" href="{{route('book.create')}}">
                        Tambah Data Buku
                   </x-primary-button>
                   <x-primary-button tag="a" href="{{route('book.print')}}">
                        Cetak PDF
                   </x-primary-button>
                   <x-primary-button tag="a" href="{{route('book.export')}}" target="_blank">
                        Export Excel
                   </x-primary-button>
                   <x-primary-button
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'import-book')"> 
                        {{ __('import Excel')}}
                   </x-primary-button>
                   <br/><br/>
                   <x-table>
                        <x-slot name="header">
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Tahun Terbit</th>
                                <th>Penerbit</th>
                                <th>Kota Terbit</th>
                                <th>Cover</th>
                                <th>Kuantitas</th>
                                <th>Kode Rak</th>
                                <th>AKSI</th>
                            </tr>
                        </x-slot>
                        @php $num=1; @endphp
                        @foreach($books as $book)
                        <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->city }}</td>
                            <td>
                                <img src="{{asset('storage/cover_buku/'.$book->cover)}}" width="100px" alt="">
                            </td>
                            <td>{{ $book->quantity }}</td>
                            <td>{{ $book->bookshelf->code }}-{{ $book->bookshelf->name }}</td>
                            <td>
                                <x-primary-button tag="a" href="{{route('book.edit', $book->id)}}">
                                    EDIT
                                </x-primary-button>

                                <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal',
                                'confirm-book-deletion')" x-on:click="$dispatch('set-action',
                                '{{ route('book.destroy', $book->id) }}')"> {{ __('Delete')}}
                                </x-danger-button>
                            </td>
                        </tr>
                        @endforeach
                   </x-table>

                   <!-- MODAL DELETE -->
                   <x-modal name="confirm-book-deletion" focusable maxWidth="xl">
                        <form method="post" x-bind:action="action" class="p-6">
                            @csrf
                            @method('delete')

                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Apakah anda yakin akan menghapus data?') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Setelah proses dilakukan. Data akan dihilangkan secara permanen.') }}
                            </p>

                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>

                                <x-danger-button class="ml-3">
                                    {{ __('Delete Data') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>

                    <!-- MODAL IMPORT -->
                    <x-modal name="import-book" focusable maxWidth="xl">
                        <form method="post" action="{{route('book.import')}}" class="p-6" enctype="multipart/form-data">
                            @csrf

                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Import Data Buku') }}
                            </h2>

                            <div class="max-w-xl">
                                <x-input-label for="cover" class="sr-only" value="File Import"/>
                                <x-file-input id="cover" name="file" class="mt-1 block w-full" required/>
                            </div>

                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>

                                <x-danger-button class="ml-3">
                                    {{ __('Upload') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
