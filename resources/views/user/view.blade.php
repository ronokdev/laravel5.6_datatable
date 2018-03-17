@extends('layout.layout_main')


@section('css_scripts')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

@endsection


@section('content')


        <div class="row">
            {{--<img style="height: 69px;" src="{{ asset('spinner/spniner.gif') }}" alt="">--}}

            <div class="col-sm-12">
                <section class="panel">

                    <button type="button" class="basic_table btn btn-info ">
                        <i class="fa fa-refresh"></i> Update
                    </button>
                    <br>
                    <br>





                    <div class="form-group" style="margin-bottom: 4pc;">
                        <label class="col-sm-2 control-label">Date Range Search</label>
                        <div class="col-sm-6">
                            <input class="form-control" placeholder=""  type="text" id="dateRange"  name="min">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" placeholder="Starting Date"  style="display: none;" type="text" id="min" name="min">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" placeholder="Ending Date" style="display: none;" type="text" id="max" name="max">
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-success search_table"><i class="fa fa-search"></i>Search</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <header class="panel-heading">
                        Customized DataTable
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            {{--<a href="javascript:;" class="fa fa-cog"></a>--}}
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
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
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="{{ asset('customjs/jquery.dataTables.min.js') }}"></script>
    <link src="{{ asset('customcss/custom.css') }}"> </link>
    <script src="{{ asset('customjs/custom.index.js') }}"></script>


    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

@endsection
