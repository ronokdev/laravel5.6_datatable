@extends('layout.layout_main')




@section('content')


        <div class="row">
            {{--<img style="height: 69px;" src="{{ asset('spinner/spniner.gif') }}" alt="">--}}

            <div class="col-sm-12">
                <section class="panel">
                    <button class="basic_table">Reload Table</button>
                    {{--<header class="panel-heading">--}}
                        {{--Table--}}
                        {{--<span class="tools pull-right">--}}
                            {{--<a href="javascript:;" class="fa fa-chevron-down"></a>--}}
                            {{--<a href="javascript:;" class="fa fa-cog"></a>--}}
                            {{--<a href="javascript:;" class="fa fa-times"></a>--}}
                         {{--</span>--}}
                    {{--</header>--}}
                    <div class="panel-body">
                        <div class="adv-table">
                            <table style="cursor:pointer;" width="100%" class="compact display table table-bordered table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Phone Number</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>


@endsection





@section('js_scripts')
    <script src="{{ asset('customjs/custom.index.js') }}"></script>
    <script src="{{ asset('customjs/jquery.dataTables.min.js') }}"></script>
    <link src="{{ asset('customcss/custom.css') }}"> </link>
@endsection
