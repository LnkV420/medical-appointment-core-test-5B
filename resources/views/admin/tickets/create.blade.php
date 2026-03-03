<x-admin-layout title="Nuevo Ticket | Simify" :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Soporte',
        'href' => route('admin.tickets.index'),
    ],
    [
        'name' => 'Nuevo Ticket',
    ],
]">

    <form action="{{ route('admin.tickets.store') }}" method="POST">
        @csrf
        
        <x-card>
            <div class="mb-4">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">Reportar un problema</h3>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Describe tu problema o duda y nuestro equipo de soporte se pondrá en contacto contigo.</p>
            </div>

            <div class="mb-4">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título del problema</label>
                <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                @error('title')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción detallada</label>
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></textarea>
                @error('description')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-2">
                <x-button type="button" href="{{ route('admin.tickets.index') }}" class="bg-white text-gray-900 border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Cancelar
                </x-button>
                <x-button type="submit" primary>
                    Enviar Ticket
                </x-button>
            </div>
        </x-card>
    </form>

</x-admin-layout>
