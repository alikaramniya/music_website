<x-app-layout>
    <br/>
    <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h5 class="m-0">فرستنده : {{ $answer->user->name }}</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title mb-2 text-bold">عنوان : {{ $answer->type }}</h6>
            <p class="card-text">{{ $answer->description }}</p>
            <a style="color:white;" onclick="event.preventDefault(); document.getElementById('delete-comment').submit();" class="btn btn-danger">حذف</a>
            <form action="{{ route('answers.deleteShowAnswer', $answer->id) }}" method="POST" id="delete-comment">
              @csrf
              @method('DELETE')
            </form>
          </div>
        </div>
      </div>
</x-app-layout>