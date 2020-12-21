<x-app-layout>
<br>
    <div class="col-12">
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            @if (collect($melodis)->isNotEmpty())
              <table class="table table-hover">
                <tbody>
                    <tr>
                      <th>نام خواننده</th>
                      <th>نوع</th>
                      <th>موزیک</th>
                      <th></th>
                      <th></th>
                  </tr>
                @foreach($melodis as $audio)
                  <tr>
                      <td>{{ $audio->singer }}</td>   
                      <td>{{ $audio->title }}</td>
                      <td>
                          <audio controls>
                              <source src="{{ $audio->address }}" type="audio/mpeg">
                            </audio> 
                      </td>
                      <td>
                          <form method="POST" action="{{ route('melodis.destroy', $audio->id) }}">
                              @csrf
                              @method('DELETE')
                              <button style="cursor: pointer; width:55px; height:36px; border:none;" class="badge badge-danger">حذف</button>
                          </form>
                          {{-- <a href="#" style="cursor:pointer" class="badge badge-danger">حذف</a> --}}
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
                text: 'لیست موزیک های شما خالی است',
              });
            </script>
            @endif
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

</x-app-layout>