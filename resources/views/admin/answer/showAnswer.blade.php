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
          </div>
        </div>
      </div>
</x-app-layout>
