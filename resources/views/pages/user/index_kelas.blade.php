@extends('layouts.app_admin')
@section('content')
    <h5>Kelas</h5>
    <div id="card-advance" class="card card-default">

            <div class="card-body">

                <a href="{{route('kelas.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">

                                <thead>
                                    <tr>

                                        <th style="">No</th>
                                        <th style="">Name</th>
                                        <th style="">Max Student</th>
                                        {{--<th style="">dosen</th>--}}
                                        {{--<th style="">class</th>--}}
                                          {{--<th style="">Date Of Birth</th>--}}
                                          {{--<th style="">Phone</th>--}}
                                          {{--<th style="">Address</th>--}}
                                          <th style="">Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  @php $no = 1; @endphp
                                  @foreach($kelass as $data)

                                    <tr>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{$no++}}</p>
                                      </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$data->name_kls}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$data->max_students}}</p>
                                        </td>



                                        {{--<td class="v-align-middle semi-bold">--}}
                                            {{--<p value="{{$data->course_id}}">{{$data->course_id}}</p>--}}
                                        {{--</td>--}}

                                        {{--<td class="v-align-middle semi-bold">--}}
                                            {{--<p>{{$data->class_id}}</p>--}}
                                        {{--</td>--}}

                                        {{--<td class="v-align-middle semi-bold">--}}
                                            {{--<p>{{$data->dob}}</p>--}}
                                        {{--</td>--}}
                                        {{--<td class="v-align-middle semi-bold">--}}
                                            {{--<p>{{$data->phone}}</p>--}}
                                        {{--</td>--}}
                                        {{--<td class="v-align-middle semi-bold">--}}
                                            {{--<p>{{$data->address}}</p>--}}
                                        {{--</td>--}}
                                        {{--<td class="v-align-middle semi-bold">--}}
                                            {{--<p>{{$data->gender}}</p>--}}
                                        {{--</td>--}}
                                        <td class="v-align-middle semi-bold">

                                            <form method="post" action="{{ route('kelas.destroy' , $data -> id ) }}">

                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}

                                                <p class="v-align-middle semi-bold"><a href="{{ route('kelas.edit' ,  ['id' => $data -> id]) }}" class=" btn btn-sm btn-primary">Edit</a></p>

                                                <button type="submit" onclick="return confirm('Yakin Ingin Menghapus Data?')">Delete</button>


                                            </form>

                                        </td>


                                    </tr>

    @endforeach
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
@endsection
