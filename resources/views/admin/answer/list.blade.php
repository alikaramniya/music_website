<x-app-layout>
  @if ($answers->isNotEmpty())
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
                        <th></th>
                    </tr>
                  @foreach($answers as $answer)
                    <tr>
                        <td>{{ $answer->type }}</td>               
                        <td>
                          <a style="width: 94px; height:22px; font-size: 14px;" href="{{ route('answers.shows', [$answer->id, $id_comment]) }}" class="badge badge-info">نمایش نظر</a>
                        </td>
                        <td>
                          <form action="{{ route('answers.deleteOldAnswer', [$answer->id, $id_comment]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">حذف</button>
                          </form>
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
    @else
        <script>
          window.location.href = "{{ route('comments.index') }}";
        </script>
    @endif
    </x-app-layout>