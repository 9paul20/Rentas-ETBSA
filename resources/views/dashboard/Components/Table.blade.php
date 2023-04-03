@if(count($columnNames) > 0)
<div class="mx-auto max-w-7xl">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Users</h1>
            
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                user</button>
        </div>
    </div>
    @if(count($rowDatas) > 0)
    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
        <div class="relative text-gray-600 py-1">
            <input type="search" name="serch" placeholder="Realizar Busqueda" class="bg-white h-10 px-5 pr-4 rounded-full text-sm focus:outline-none">
            {{-- <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
              <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
              </svg>
            </button> --}}
          </div>
        <table class="min-w-full border-collapse bg-white text-left text-sm text-gray-500 divide-y divide-gray-300">
            <thead class="bg-gray-50">
                <tr>
                    @foreach ($columnNames as $columnName)
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                        {{ $columnName }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 border-t  bg-white">
                @foreach ($rowDatas as $rowData)
                <tr class="hover:bg-gray-100">
                    <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                        <div class="relative h-10 w-10">
                            <img class="h-full w-full rounded-full object-cover object-center" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                            <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                        </div>
                        <div class="text-sm">
                            <div class="font-medium text-gray-700">{{ $rowData['name'] }}</div>
                            <div class="text-gray-400">{{ $rowData['email'] }}</div>
                        </div>
                    </th>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                        <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                            <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                            {{ $rowData['active'] }}
                        </span>
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                        <div class="font-medium text-gray-700">Front-end Developer</div>
                        <div class="text-gray-400">Optimization</div>
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                        <div class="flex gap-2">
                            <span class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600">
                                Design
                            </span>
                            <span class="inline-flex items-center gap-1 rounded-full bg-indigo-50 px-2 py-1 text-xs font-semibold text-indigo-600">
                                Product
                            </span>
                            <span class="inline-flex items-center gap-1 rounded-full bg-violet-50 px-2 py-1 text-xs font-semibold text-violet-600">
                                Develop
                            </span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex justify-end gap-4">
                            <a x-data="{ tooltip: 'Delete' }" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-red-500" x-tooltip="tooltip">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0">
                                    </path>
                                </svg>
                            </a>
                            <a x-data="{ tooltip: 'Edite' }" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-blue-500" x-tooltip="tooltip">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $rowDatas->links() }}
    </div>
    @else
    <main class="flex items-center justify-center flex-1 px-4 py-8">
        <!-- Content -->
        <h1 class="text-5xl font-bold text-gray-500">No hay datos de..</h1>
    </main>
    @endif
    @else
    <main class="flex items-center justify-center flex-1 px-4 py-8">
        <!-- Content -->
        <h1 class="text-5xl font-bold text-gray-500">@yield('meta-title', config('app.name'))</h1>
    </main>
</div>
@endif
