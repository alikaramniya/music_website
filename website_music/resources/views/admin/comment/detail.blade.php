<x-app-layout>
<br/>
    <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h5 class="m-0">فرستنده : {{ $comment->user->name }}</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title mb-2 text-bold">عنوان : {{ $comment->title }}</h6>
            <p class="card-text">{{ $comment->comment }}</p>
            <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-primary">پاسخ</a>
            <a style="color:white;" onclick="event.preventDefault(); document.getElementById('delete-comment').submit();" class="btn btn-danger">حذف</a>
            <form id="delete-comment" action="{{ route('comments.destroy', $comment->id) }}" method="post">
              @csrf
              @method('DELETE')
            </form>
          </div>
        </div>
      </div>

</x-app-layout>