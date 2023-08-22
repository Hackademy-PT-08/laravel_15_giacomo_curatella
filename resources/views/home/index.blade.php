<x-layout>
    <p class="text-center py-5 h2 position-relative">Tutti i Post @livewire('giacomo')</p>


    @if(count($articles) < 1)

        <p class="text-center text-danger py-5">Non ci sono Post da mostrare!</p>
    @else
        <section class="container py-5">
            @foreach($articles as $article)
                <div class="row p-5 shadow border border-1 border-success border-opacity-25 rounded-3 mb-4">
                    <div class="col-6 d-flex justify-content-start">
                        <a href="{{ route('modificaArticolo', ['id'=>$article->id]) }}" class="btn btn-warning">Modifica</a>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <form action="{{ route('eliminaArticolo', ['id'=>$article->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Elimina" class="btn btn-danger">
                        </form>
                    </div>
                    <div class="col-12 mt-4">
                        <h2>Titolo del post: {{ $article->title }}</h2>
                    </div>
                    <div class="col-12 mt-4">
                        <p>{{ $article->content }}</p>
                    </div>
                    @livewire('likes-counter',['article'=>$article])
                </div>
            @endforeach
        </section>
    @endif
</x-layout>