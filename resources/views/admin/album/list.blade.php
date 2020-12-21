<x-app-layout>
  @if ($albums->isNotEmpty())
    <br>
        <div class="col-12">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody>
                      <tr>
                        <th>عنوان</th>
                        <th>قیمت</th>
                        <th></th>
                    </tr>
                  @foreach($albums as $album)
                    <tr>
                        <td>{{ $album->title }}</td>
                        <td>{{ number_format($album->price) }} تومان</td>
                        <td>
                          <form action="{{ route('albums.destroy', $album->id) }}" method="POST" id="delete-album">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">حذف</button>
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

    Swal.fire({
      icon: 'warning',
      title: 'هشدار',
      text: 'لیست کامنت های شما خالی است',
    });
  </script>
  @endif
</x-app-layout>
