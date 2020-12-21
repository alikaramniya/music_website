<x-app-layout>
    <br>
        <div class="col-12">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody>
                      <tr>
                        <th>عنوان کامنت</th>
                        <th>فرستنده</th>
                        <th></th>
                    </tr>
                  @foreach($answers as $answer)
                    <tr>
                        <td>{{ $answer->type }}</td>               
                        <td>
                          <a style="width: 94px; height:22px; font-size: 14px;" href="{{ route('answers.show',$answer->id) }}" class="badge badge-info">نمایش نظر</a>
                        </td>
                        <td></td>
                    </tr>
                  @endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    
    </x-app-layout>