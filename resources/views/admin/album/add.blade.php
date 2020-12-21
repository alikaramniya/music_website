<x-app-layout>

    <div class="col-md-12">

        <br>
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">افزودن آلبوم جدید</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{ route('albums.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">خواننده</label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="عنوان آلبوم">
              </div>
              @error('price')
                <span class="text text-danger">{{ $message }}</span>
              @enderror
              <div class="form-group">
                <label for="exampleInputPassword1">قیمت آلبوم به تومان</label>
                <input type="number" class="form-control" name="price" id="exampleInputPassword1" placeholder="قیمت آلبوم را وارد کنید">
              </div>
              @error('price')
                <span class="text text-danger">{{ $message }}</span>
              @enderror
              <div class="form-group">
                <label>متن</label>
                <textarea class="form-control" name="text" rows="5" placeholder="پاسخ خود را وارد کنید ..."></textarea>
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
