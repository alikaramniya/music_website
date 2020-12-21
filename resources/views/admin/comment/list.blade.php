<x-app-layout>
    <br>
        <div class="col-12">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                @if ($comments->isNotEmpty())
                <table class="table table-hover">
                  <tbody>
                      <tr>
                        <th>عنوان کامنت</th>
                        <th>فرستنده</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                  @foreach($comments as $comment)
                    <tr>
                        <td>{{ $comment->title }}</td>
                        <td>{{ $comment->user->name }}</td>
                        <td>
                          @if ($comment->status == '0')
                          <a style="width: 94px; height:22px; font-size: 14px;" href="{{ route('comments.show', $comment->id) }}" class="badge badge-info">نمایش نظر</a>
                          @else
                          <a style="height:22px; font-size: 14px;" href="{{ route('comments.oldComment', [$comment->user->id, $comment->id]) }}" class="badge badge-warning">به این کامنت پاسخ داده اید</a>
                          @endif
                        </td>
                        <td>
                            <form method="POST" action="{{ route('comments.destroy', $comment->id) }}">
                                @csrf
                                @method('DELETE')
                                <button style="cursor: pointer; width:55px; height:36px; border:none;" class="badge badge-danger">حذف</button>
                            </form>
                        </td>
                        <td></td>
                    </tr>
                  @endforeach
                </tbody>
                </table>

                @else
                  <script>

                  Swal.fire({
                    icon: 'warning',
                    title: 'هشدار',
                    text: 'لیست کامنت های شما خالی است',
                  });
                </script>
                @endif
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

    </x-app-layout>
