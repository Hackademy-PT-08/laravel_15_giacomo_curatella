<x-layout>
    <p class="text-center py-5 h2">Aggiungi un Post</p>

    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('salvaArticolo') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo del post</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Testo del post</label>
                        <textarea name="content" cols="30" rows="10" style="resize: none;" class="form-control">{{ old('content') }}</textarea>
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="btn btn-success">Aggiungi post</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>