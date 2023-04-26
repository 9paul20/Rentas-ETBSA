@props(['text', 'action'])

<div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
    <button id="btn-create-modal-typeFixedExpenses" type="button"
        class="inline-flex items-center justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 sm:w-auto show-modal">
        {{ $text }}
    </button>
</div>

<div id="create-modal-typeFixedExpenses" name="create-modal-typeFixedExpenses" class="hidden">
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on modal state -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-50 transition-opacity" id="background"></div>
        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <!-- Modal panel, show/hide based on modal state -->
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                    <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Agregar Tipo De Gasto
                            Fijo
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">Por favor, completa los siguientes campos:</p>
                    </div>
                    <form action="{{ $action }}" class="mt-4 space-y-4" method="PUT">
                        @csrf
                        <div class="col-span-6 sm:col-span-6">
                            <label for="tipoGastoFijo" class="block text-sm font-medium text-gray-700">Tipo De Gasto
                                Fijo</label>
                            <input type="text" name="tipoGastoFijo" id="tipoGastoFijo"
                                autocomplete="given-tipoGastoFijo"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm @error('tipoGastoFijo') border-red-400 @enderror"
                                value="{{ old('tipoGastoFijo') }}" required autofocus>
                            @error('tipoGastoFijo')
                            <div class="flex
                                    items-center mt-1 text-red-400">
                                <i class="fas fa-exclamation-triangle mr-2"></i>
                                <span>{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                            <textarea rows="3" name="descripcion" id="descripcion" autocomplete="given-descripcion"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm @error('descripcion') border-red-400 @enderror"> {{ old('descripcion') }}</textarea>
                            @error('descripcion')
                            <div class="flex
                                    items-center mt-1 text-red-400">
                                <i class="fas fa-exclamation-triangle mr-2"></i>
                                <span>{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="mt-5 sm:mt-6 flex justify-end space-x-2">
                            <button type="submit"
                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 rounded-md">Guardar</button>
                            <button type="button" id="btn-create-modal-typeFixedExpenses-close"
                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 rounded-md">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
@if (request()->is('Dashboard/Panel/FixedExpenses'))
<script>
    var showModalButtonCreateTypeFixedExpenses = document.getElementById('btn-create-modal-typeFixedExpenses');
            var createModalTypeFixedExpenses = document.getElementById('create-modal-typeFixedExpenses');
            var nombreTipoGastoFijoInput = document.getElementById('tipoGastoFijo');
            var nombreDescripcionInput = document.getElementById('descripcion');
            // var modalContent = document.querySelector(
            //     '.flex.min-h-full.items-end.justify-center.p-4.text-center.sm\\:items-center.sm\\:p-0');
            document.addEventListener('DOMContentLoadedCreateTypeFixedExpenses', function() {

                showModalButtonCreateTypeFixedExpenses.addEventListener('click', function() {
                    createModalTypeFixedExpenses.classList.remove('hidden');
                    window.location.hash = "createModalTypeFixedExpenses";
                    nombreTipoGastoFijoInput.focus();
                });

                document.getElementById('background').addEventListener('click', function() {
                    document.getElementById('create-modal-typeFixedExpenses').classList.add('hidden');
                    window.location.hash = "";
                });

                document.getElementById('btn-create-modal-typeFixedExpenses-close').addEventListener('click',
                    function() {
                        document.getElementById('create-modal-typeFixedExpenses').classList.add('hidden');
                        window.location.hash = "";
                    });

                if (window.location.hash === "#createModalTypeFixedExpenses") {
                    document.getElementById("create-modal-typeFixedExpenses").classList.remove("hidden");
                    nombreTipoGastoFijoInput.focus();
                }
            });
            var DOMContentLoadedCreateTypeFixedExpenses = new Event('DOMContentLoadedCreateTypeFixedExpenses');
            document.dispatchEvent(DOMContentLoadedCreateTypeFixedExpenses);
</script>
@endif
@endpush