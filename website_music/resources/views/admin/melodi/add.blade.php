<x-app-layout>

    <div class="col-md-12">

        <br>
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">افزودن آهنگ جدید</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{ route('melodis.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">خواننده</label>
                <input type="text" class="form-control" name="singer" id="exampleInputEmail1" placeholder="نام خواننده را وارد کنید">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">نوع</label>
                <input type="text" class="form-control" name="title" id="exampleInputPassword1" placeholder="عنوان را وارد کنید">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">ارسال فایل</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="file" class="custom-file-input" accept="*/*" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                  </div>
                  @error('file')
                    {{ $message }}
                  @enderror
                  <div class="input-group-append">
                    <span class="input-group-text" id="">آپلود</span>
                  </div>
                </div>
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