<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white-800 white:text-white-200 leading-tight">
            Carrinho de Compras
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
            <h3 class="text-lg font-bold mb-4">Itens no Carrinho</h3>

            @if(count($carrinho) > 0)
                @foreach($carrinho as $id => $item)
                    <div class="mb-4 border-b pb-4">
                        <p class="text-gray-800 dark:text-gray-100 font-semibold">{{ $item['nome'] }}</p>
                        <p class="text-gray-600 dark:text-gray-300">R$ {{ number_format($item['preco'], 2, ',', '.') }}</p>
                        
                        @if(!empty($item['imagem']))
                            <img src="{{ asset('storage/' . $item['imagem']) }}" class="w-32 h-32 object-cover mt-2">
                        @endif

                        <a href="{{ route('carrinho.apagar', $id) }}" class="text-red-500 text-sm mt-2 inline-block">Remover</a>
                    </div>
                @endforeach
            @else
                <p class="text-gray-600 dark:text-gray-300">O carrinho está vazio.</p>
            @endif
        </div>
    </div>
</x-app-layout>


