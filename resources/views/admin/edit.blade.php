<x-admin-layout>
    <h3 class="my-3 text-center">Blog edit form</h3>
        <x-card-wapper>
            <form action="/admin/blogs/{{$blog->slug}}/update" method="POST" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <x-form.input name="title" value="{{$blog->title}}" />
                <x-form.input name="slug" value="{{$blog->slug}}" />
                <x-form.input name="intro" value="{{$blog->intro}}" />
                <x-form.textarea name="body" value="{{$blog->body}}" />
                <x-form.input name="thumbnail" type="file" />
                <img src="{{asset("storage/$blog->thumbnail")}}" alt="" width="200px" height="100px">
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
