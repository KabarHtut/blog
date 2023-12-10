<x-admin-layout>
    <h3 class="my-3 text-center">Blog create form</h3>
        <x-card-wapper>
            <form action="/admin/blogs/store" method="POST" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title" />
                <x-form.input name="slug" />
                <x-form.input name="intro" />
                <x-form.textarea name="body" />
                <x-form.input name="thumbnail" type="file" />
                <x-form.input-wapper>
                    <x-form.label name="category" />
                    <x-form.select name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </x-form.select>
                </x-form.input-wapper>
                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </x-card-wapper>
</x-admin-layout>
