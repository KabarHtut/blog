<x-admin-layout>
    <h3>Blogs</h3>
    <x-card-wapper>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Intro</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($blogs as $blog)
                  <tr>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->intro}}</td>
                    <td><a href="/admin/blogs/{{$blog->slug}}/edit" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="/admin/blogs/{{$blog->slug}}/delete" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
          {{$blogs->links()}}
    </x-card-wapper>
</x-admin-layout>
