<x-app-layout>

    <div class="col-md-12">

        <br>
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">افزودن گالری جدید</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" checked name="status" value="1">
                      <label class="form-check-label">فعال</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="status" value="0">
                      <label class="form-check-label"> غیرفعال</label>
                    </div>
                </div>
              <div class="form-group">
                <label for="exampleInputFile">ارسال فایل</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" accept="image/*" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text" id="">آپلود</span>
                  </div>
              </div>
              <div class ="form-group">
                  @error('image')
                    <span class="text text-danger">{{ $message }}</span>
                  @enderror
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