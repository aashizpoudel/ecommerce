@extends('admin.dash')

@section('content')

    <div class="container-fluid" id="admin-product-container">

        <br><br>
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-bars fa-5x"></i></a>
        <a href="{{ url('admin/advertisements/add') }}" class="btn btn-primary">Add new Advertisement</a>
        <br><br>

        <h6>There are {{ $advertisementCount }} advertisements</h6><br>


        <table class="table table-bordered table-condensed table-hover">
            <thead>
            <tr>
                <th class="text-center blue white-text">Delete</th>
                <th class="text-center blue white-text">Banner</th>
                <th class="text-center blue white-text">Advertiser Name</th>
                <th class="text-center blue white-text" id="td-display-mobile">Link</th>
                <th class="text-center blue white-text" id="td-display-mobile">Expiry Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($advertisement as $advertisements)
            <tr>
                <td class="text-center">
                    <form method="post" action="{{ route('admin.advertisement.delete', $advertisements->id) }}" class="delete_form_product">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button id="delete-product-btn">
                            <i class="material-icons red-text">delete_forever</i>
                        </button>
                    </form>
                </td>
                <td class="text-center" style="width: 20%;">
                  
                        @if ($advertisements->banner)
                            <img src="../src/public/advertisements/{{ $advertisements->banner }}" alt="banner" height=100 width=300 />
                        @else
                            N/A
                        @endif
                    
                </td>
                <td class="text-center">{{ $advertisements->advertiser }}</td>
                <td class="text-center">{{ $advertisements->link }}</td>
                <td class="text-center">{{ $advertisements->expires }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

        {!! $advertisement->links() !!}

    </div>

@endsection