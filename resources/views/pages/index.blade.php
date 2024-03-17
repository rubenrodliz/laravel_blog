@extends('layouts.template')

@section('title', 'Home')
@section('description', 'This is the home page')
@section('content')

    <!-- Botón para abrir el modal -->
    <button id="openModal" data-modal-target="modal" data-modal-toggle="modal"
        class="inline-flex items-center mb-4 py-2.5 px-4 text-sm font-medium text-center text-white bg-gray-800 rounded-lg focus:ring-4 focus:ring-gray-200 hover:bg-gray-700">
        Crear nuevo hilo
    </button>

    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-center items-center h-full">
        <div class="relative p-4 w-full max-w-md h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Crear nuevo hilo
                    </h3>
                    <button type="button" onclick="toggleModal()" class="text-gray-400 bg-transparent hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-modal">
                        {{-- <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg> --}}
                        <span>Cerrar modal</span>
                        
                    </button>
                </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="{{ route('thread.store') }}" method="POST">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Introduce el nombre" required>
                    </div> 
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Contenido</label>
                        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Introduce el contenido del hilo" required></textarea>                    
                    </div>
                </div>
                <button type="submit" class="inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Crear nuevo hilo
                </button>
            </form>
        </div>
    </div>
</div> 

    @foreach ($threads as $thread)
        @include('pages.partials._item')
    @endforeach

    {{ $threads->links() }}

    <script>
        function toggleModal() {
            const modal = document.getElementById('crud-modal');
            modal.classList.toggle('hidden');
        }

        let openModal = document.getElementById('openModal');
        openModal.addEventListener('click', () => {
            toggleModal()
        })
    </script>
@endsection

@section('scripts')

@endsection
