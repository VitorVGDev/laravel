<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo Produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('produtos.store') }}" method="POST">
                        @csrf
                        <!-- Nome -->
                        <div class="mb-4">
                            <label for="nome" class="block font-medium text-sm text-gray-700">Nome</label>
                            <input type="text" name="nome" id="nome" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('nome') border-red-500 @enderror" value="{{ old('nome') }}" required>
                            @error('nome')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>

                        <!-- Descrição -->
                        <div class="mb-4">
                            <label for="descricao" class="block font-medium text-sm text-gray-700">Descrição</label>
                            <textarea name="descricao" id="descricao" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('descricao') border-red-500 @enderror" required>{{ old('descricao') }}</textarea>
                            @error('descricao')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>

                        <!-- Preço -->
                        <div class="mb-4">
                            <label for="preco" class="block font-medium text-sm text-gray-700">Preço</label>
                            <input type="number" step="0.01" name="preco" id="preco" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('preco') border-red-500 @enderror" value="{{ old('preco') }}" required>
                            @error('preco')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>

                        <!-- Data de Lançamento -->
                        <div class="mb-4">
                            <label for="data_lancamento" class="block font-medium text-sm text-gray-700">Data de Lançamento</label>
                            <input type="date" name="data_lancamento" id="data_lancamento" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('data_lancamento') border-red-500 @enderror" value="{{ old('data_lancamento') }}" required>
                            @error('data_lancamento')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>

                        <!-- Ativo -->
                        <div class="block mb-4">
                            <label for="ativo" class="inline-flex items-center">
                                <input type="checkbox" name="ativo" id="ativo" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" {{ old('ativo', true) ? 'checked' : '' }}>
                                <span class="ml-2 text-sm text-gray-600">Ativo</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('produtos.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Cancelar
                            </a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Salvar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

