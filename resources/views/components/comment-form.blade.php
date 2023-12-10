@props(['blog'])
<x-card-wapper>
    <form action="/blog/{{$blog->slug}}/comment" method="POST">
        @csrf
        <div class="mb-3">
          <textarea name="body" class="form-control border border-0" cols="10" rows="5"
          placeholder="say something...">
          </textarea>
        </div>
        <x-error name="body"/>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-card-wapper>
