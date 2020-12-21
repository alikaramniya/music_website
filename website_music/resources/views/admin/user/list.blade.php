<x-app-layout>
    <br>
        <div class="col-12">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                @if (collect($users)->isNotEmpty())
                  <table class="table table-hover">
                    <tbody>
                        <tr>
                          <th>نام کاربر</th>
                          <th>ایمیل</th>
                          <th></th>
                          <th></th>
                          <th></th>
                      </tr>
                    @foreach($users as $user)
                      <tr>
                          <td>{{ $user->name }}</td>   
                          <td>{{ $user->email }}</td>
                          {{-- <td></td> --}}
                          <td>
                              {{-- <form method="POST" action="{{ route('melodis.destroy', $user->id) }}">
                                  @csrf
                                  @method('DELETE')
                                  <button style="cursor: pointer; width:55px; height:36px; border:none;" class="badge badge-danger">حذف</button>
                              </form> --}}
                          </td>
                          <td></td>
                      </tr>
                    @endforeach
                  </tbody>
                  </table>
                @else
                    <span class="btn btn-danger">لیست کاربر ها خالی است</span>
                @endif
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    
    </x-app-layout>