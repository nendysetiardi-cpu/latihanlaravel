{{-- List Dosen --}}
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <h3 class="font-semibold text-lg mb-4">List Dosen</h3>
        <table class="table-auto w-full border">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="px-4 py-2 w-16 text-center">No</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">NIP</th>
                    <th class="px-4 py-2 w-40 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $dsn)
                <tr>
                    <td class="border px-4 py-2 text-center">{{ $loop->iteration }}</td>
                    <td class="border px-4 py-2">{{ $dsn->nama }}</td>
                    <td class="border px-4 py-2">{{ $dsn->nip }}</td>
                    <td class="border px-4 py-2 text-center">
                        <a href="{{ route('dosen.edit', $dsn->id) }}"
                            class="inline-block px-3 py-1 bg-yellow-500 text-white rounded">Edit</a>

                        <form action="{{ route('dosen.destroy', $dsn->id) }}"
                            method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Hapus data dosen ini?')"
                                class="px-3 py-1 bg-red-600 text-white rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>