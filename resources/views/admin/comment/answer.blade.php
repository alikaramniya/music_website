<x-app-layout>

    <div class="col-md-12">

        <br>
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"> پاسخ سوال : {{ $comment->user->name }}</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{ route('answers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <input type="hidden" class="form-control" name="user_id" value="{{ $comment->user->id }}" id="exampleInputEmail1">
                <input type="hidden" class="form-control" name="comment_id" value="{{ $comment->id }}" id="exampleInputEmail1">
              <div class="form-group">
                <label for="exampleInputPassword1">نوع</label>
                <input type="text" class="form-control" name="type" id="exampleInputPassword1" value="{{ $comment->title }}" placeholder="عنوان را وارد کنید">
              </div>
              <div class="form-group">
                <label>متن</label>
                <textarea class="form-control" name="description" rows="5" placeholder="پاسخ خود را وارد کنید ..."></textarea>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">ارسال</button>
            </div>
          </form>
        </div>
        <!-- /.card -->


      </div>

</x-app-layout>