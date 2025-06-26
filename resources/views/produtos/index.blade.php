<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Produtos
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
            
            <div class="mb-6">
                <x-link-button href="{{ route('produtos.create') }}">
                    + Produto
                </x-link-button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($produtos as $produto)
                    <div class="bg-gray-100 dark:bg-gray-700 rounded-lg shadow p-4">
                        @if ($produto->imagem)
                        <img src="{{ asset("storage/".$produto->imagem) }}" alt="produto" class="w-full h-48 object-cover rounded mb-4">

                        @else
                            <div class="w-full h-48 bg-gray-300 rounded mb-4 flex items-center justify-center text-gray-500">
                                Sem imagem
                            </div>
                        @endif

                        <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $produto->nome }}</p>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                        <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">{{ $produto->descricao }}</p>
                        <a href="{{ route('carrinho.gravar',$produto->id )}}">Adicionar ao carrinho</a>

                   



                    </div>
                @empty
                    <p class="text-gray-600 dark:text-gray-300">Nenhum produto cadastrado ainda.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

   

</x-app-layout>
