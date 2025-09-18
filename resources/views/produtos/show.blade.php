<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do Produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">{{ $produto->nome }}</h3>
                    </div>
                    <div class="mb-4">
                        <p><strong>Descrição:</strong> {{ $produto->descricao }}</p>
                    </div>
                    <div class="mb-4">
                        <p><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                    </div>
                    <div class="mb-4">
                        <p><strong>Data de Lançamento:</strong> {{ \Carbon\Carbon::parse($produto->data_lancamento)->format('d/m/Y') }}</p>
                    </div>
                    <div class="mb-4">
                        <p><strong>Ativo:</strong> {{ $produto->ativo ? 'Sim' : 'Não' }}</p>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('produtos.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                            Voltar
                        </a>
                        <a href="{{ route('produtos.edit', $produto) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Editar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

