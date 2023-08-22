<x-layout>
    <p class="text-center py-5 h2">Modifica il post: {{$article->title}}</p>

    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('salvaModificheArticolo', ['id' => $article->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo del post</label>
                        <input type="text" name="title" class="form-control" value="{{ $article->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Testo del post</label>
                        <textarea name="content" cols="30" rows="10" style="resize: none;" class="form-control">{{ $article->content }}</textarea>
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary">Modifica post</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>