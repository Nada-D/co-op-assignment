<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <x-setting heading="Create a New Note">
        <form method="POST" action="/notes" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" required />
            <x-form.input name="slug" required />
            <x-form.textarea name="excerpt" required />
            <x-form.textarea name="body" required />


            <x-form.button>Save</x-form.button>
        </form>
    </x-setting>
