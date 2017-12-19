@extends('admin.dash')

@section('content')

    <div class="container" id="admin-product-container">

            <br><br>
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-bars fa-5x"></i></a>
        <a href="{{ url('admin/products') }}" class="btn btn-danger">Back</a>
            <br><br>

        <h4 class="text-center">Add new Advertisement</h4><br><br>

        <div class="col-md-12">

            <form role="form" method="POST" action="{{ route('admin.advertisement.post') }}" enctype="multipart/form-data">
                {{ csrf_field() }} 

                <div class="col-sm-6 col-md-6" id="Product-Input-Field">
                    <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                        <label>Advertisers Name</label>
                        <input type="text" class="form-control" name="advertiser" value="{{ old('product_name') }}" placeholder="Add Advertiser">
                        @if($errors->has('product_name'))
                            <span class="help-block">{{ $errors->first('product_name') }}</span>
                        @endif
                    </div>
                </div>
                 <div class="col-sm-6 col-md-6" id="Product-Input-Field">
                    <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                        <label>Link to Redirect To</label>
                        <input type="text" class="form-control" name="link" value="{{ old('product_name') }}" placeholder="Add Advertiser">
                        @if($errors->has('product_name'))
                            <span class="help-block">{{ $errors->first('product_name') }}</span>
                        @endif
                    </div>
                </div>
                 <div class="col-sm-6 col-md-6" id="Product-Input-Field">
                    <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                        <label>Expiry Date</label>
                        <input type="date" class="form-control" name="expires" value="{{ old('product_name') }}" placeholder="Add Advertiser">
                        @if($errors->has('product_name'))
                            <span class="help-block">{{ $errors->first('product_name') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-sm-6 col-md-6" id="Product-Input-Field">
                    <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                        <label>Banner Image</label>
                        <input type="file" class="form-control" name="banner" placeholder="Upload Image">
                        @if($errors->has('product_name'))
                            <span class="help-block">{{ $errors->first('product_name') }}</span>
                        @endif
                    </div>
                </div>

             
               
                <!-- Tab panes -->
               
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Create Advertisement</button>
                </div>

            </form>

        </div> <!-- Close col-md-12 -->

    </div>  <!-- Close container -->
@endsection

@section('footer')
        <!-- Include Froala Editor JS files. -->
    <script type="text/javascript" src="{{ asset('src/public/js/libs/froala_editor.min.js') }}"></script>

    <!-- Include Plugins. -->
    <script type="text/javascript" src="{{ asset('src/public/js/plugins/align.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/public/js/plugins/char_counter.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/public/js/plugins/font_family.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/public/js/plugins/font_size.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/public/js/plugins/line_breaker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/public/js/plugins/lists.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/public/js/plugins/paragraph_format.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/public/js/plugins/paragraph_style.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/public//js/plugins/quote.min.js') }}"></script>


    <script>
        $(function() {
            $('#product-description').froalaEditor({
                charCounterMax: 2500,
                height: 500,
                codeBeautifier: true,
                placeholderText: 'Insert Product description...',
            })
        });
    </script>

    <script>
        $(function() {
            $('#product_spec').froalaEditor({
                charCounterMax: 3500,
                height: 500,
                codeBeautifier: true,
                placeholderText: 'Insert Product specs...',
            })
        });
    </script>

@endsection
