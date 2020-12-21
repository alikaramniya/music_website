<x-app-layout>

    <div class="col-md-12">

        <br>
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"> پاسخ سوال : {{ $answer->user->name }}</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{ route('answers.update', $answer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="card-body">
                <input type="hidden" class="form-control" name="user_id" value="{{ $answer->user->id }}" id="exampleInputEmail1">
              <div class="form-group">
                <label for="exampleInputPassword1">نوع</label>
                <input type="text" class="form-control" name="type" readonly id="exampleInputPassword1" value="{{ $answer->type }}" placeholder="عنوان را وارد کنید">
              </div>
              <div class="form-group">
                <label>متن</label>
                <textarea class="form-control" name="description" rows="5" placeholder="پاسخ خود را وارد کنید ...">{{ $answer->description }}</textarea>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">ارسال</button>
              <a href="{{ route('comments.index') }}" class="btn btn-info">بازگشت به لیست نظرات</a>
            </div>
          </form>
        </div>
        <!-- /.card -->


      </div>

</x-app-layout>
