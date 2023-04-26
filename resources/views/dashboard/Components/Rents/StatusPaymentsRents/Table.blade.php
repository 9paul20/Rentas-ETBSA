<!-- Estados Pagos De Renta -->
<div class="transition hover:bg-green-50 overflow-hidden rounded-lg p-2 mb-2">
    <!-- header -->
    <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
        <i class="fas fa-angle-down"></i>
        <h3>Estados Pagos De Renta</h3>
    </div>
    <!-- Content -->
    <div class="accordion-content px-2 pt-0 overflow-hidden max-h-0 mb-2">
        <div class="bg-white rounded-lg border px-4 sm:px-6 lg:px-8 py-6">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">Estados Pagos De Renta</h1>
                </div>
                <x-Dashboard.Rents.StatusPaymentsRents.Button-Create-Modal text="Añadir Estado Pago De Renta"
                    action="{{ route('Dashboard.Admin.Panel.Rents.StatusPaymentRent.Store') }}" />
            </div>
            @if (count($Data['tableStatusPaymentsRents']['rowStatusPaymentsRents']) > 0)
            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                <div class="relative text-gray-600 py-1">
                    <input type="search" name="serch" placeholder="Realizar Busqueda"
                        class="bg-white h-10 px-5 pr-4 rounded-full text-sm focus:outline-none">
                </div>
                <div class="overflow-x-auto">
                    <table
                        class="min-w-full border-collapse bg-white text-left text-sm text-gray-500 divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                @foreach ($Data['tableStatusPaymentsRents']['columnStatusPaymentsRents'] as
                                $columnStatusPaymentRent)
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                    {{ $columnStatusPaymentRent }}
                                </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 border-t  bg-white">
                            @foreach ($Data['tableStatusPaymentsRents']['rowStatusPaymentsRents'] as
                            $rowStatusPaymentRent)
                            <tr class="hover:bg-gray-100">
                                <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                    <span
                                        class="inline-flex items-center gap-1 rounded-full {{ $rowStatusPaymentRent->bgColorPrimary }} px-2 py-1 text-xs font-semibold {{ $rowStatusPaymentRent->textColor }}">
                                        <span
                                            class="h-1.5 w-1.5 rounded-full {{ $rowStatusPaymentRent->bgColorSecondary }}"></span>
                                        {{ $rowStatusPaymentRent->estadoPagoRenta }}
                                    </span>
                                </th>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    @if (!empty($rowStatusPaymentRent->descripcion))
                                    <div class="text-gray-700 truncate break-words max-w-sm">
                                        {{ $rowStatusPaymentRent->descripcion }}</div>
                                    @else
                                    <div class="font-medium text-orange-700">Sin Descripción</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-4">
                                        <x-Dashboard.IconButton-Show_SA
                                            id="StatusPaymentsRents_{{ $rowStatusPaymentRent->clvEstadoPagoRenta }}"
                                            name="{{ $rowStatusPaymentRent->estadoPagoRenta }}"
                                            description="{{ $rowStatusPaymentRent->descripcion }}" href="" />
                                        <x-Dashboard.Rents.StatusPaymentsRents.Button-Edit-Modal
                                            id="StatusPaymentsRents_{{ $rowStatusPaymentRent->clvEstadoPagoRenta }}"
                                            estadoPagoRenta="{{ $rowStatusPaymentRent->estadoPagoRenta }}"
                                            textColor="{{ $rowStatusPaymentRent->textColor }}"
                                            bgColorPrimary="{{ $rowStatusPaymentRent->bgColorPrimary }}"
                                            bgColorSecondary="{{ $rowStatusPaymentRent->bgColorSecondary }}"
                                            descripcion="{{ $rowStatusPaymentRent->descripcion }}"
                                            href="{{ route('Dashboard.Admin.Panel.Rents.StatusPaymentRent.Update', $rowStatusPaymentRent->clvEstadoPagoRenta) }}" />
                                        <x-Dashboard.IconButton-Delete
                                            id="StatusPaymentsRents_{{ $rowStatusPaymentRent->clvEstadoPagoRenta }}"
                                            name="{{ $rowStatusPaymentRent->estadoPagoRenta }}"
                                            href="{{ route('Dashboard.Admin.Panel.Rents.StatusPaymentRent.Destroy', $rowStatusPaymentRent->clvEstadoPagoRenta) }}" />
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $Data['tableStatusPaymentsRents']['rowStatusPaymentsRents']->appends(['statusPaymentsRents_page' =>
                $Data['tableStatusPaymentsRents']['rowStatusPaymentsRents']->currentPage()])->links('vendor.pagination.tailwind')
                }}
            </div>
            @else
            <main class="flex items-center justify-center flex-1 px-4 py-8">
                <!-- Content -->
                <h1 class="text-5xl font-bold text-gray-500">No hay datos de Estados Pagos De Renta</h1>
            </main>
            @endif
        </div>
    </div>
</div>