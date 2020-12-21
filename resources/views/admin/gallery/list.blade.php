<x-app-layout>
    <br>
        <div class="col-12">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                @if ($galleries->isNotEmpty())
                  <table class="table table-hover">
                    <tbody>
                        <tr>
                        <th>وضعیت</th>
                        <th>تصویر</th>
                          <th></th>
                          <th></th>
                      </tr>
                    @foreach($galleries as $gallery)
                      <tr>
                          <td>
                            @if ($gallery->status == '1')
                              <form action="{{ route('galleries.update', $gallery->id) }}" method="post">
                                @csrf
                                @method('patch')
                                <input type="hidden" value="0" name="status">
                                <input type="submit" value="فعال" class="btn btn-success">
                              </form>
                            @else
                              <form action="{{ route('galleries.update', $gallery->id) }}" method="post">
                                @csrf
                                @method('patch')
                                <input type="hidden" value="1" name="status">
                                <input type="submit" value="غیرفعال" class="btn btn-danger">
                              </form>
                            @endif
                          </td>
                          <td><img src="{{asset('storage/'.$gallery->image)}}" width="100" height="100" alt="image"/></td>
                          <td>
                              <form method="POST" action="{{ route('galleries.destroy', $gallery->id) }}">
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
                      text: 'لیست گالری های شما خالی است',
                    });
                  </script>
                @endif
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    
    </x-app-layout>