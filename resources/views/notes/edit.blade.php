<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <x-setting :heading="'Edit Note: ' . $note->title">
        <form method="POST" action="/note/{{ $note->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $note->title)" required />
            <x-form.input name="slug" :value="old('slug', $note->slug)" required />

            <x-form.textarea name="excerpt" required>{{ old('excerpt', $note->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body" required>{{ old('body', $note->body) }}</x-form.textarea>

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>