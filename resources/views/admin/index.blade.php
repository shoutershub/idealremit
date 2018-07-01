@extends('layouts.loggedin.defualt')
@section('styles')
    <link href="{{url('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@stop

@section('content')

    <div class="payment-history-outter-action">
        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
            <a href="{{url('/admin/users')}}">
                <li class="list-inline-item  borderd-tunnel">
                    <h5 class="mb-0">{{$users ? count($users) : '0'}}</h5>
                    <p class="text-muted font-14">Users</p>
                    <i class="fa fa-user"></i>
                </li>
            </a>

            <a href="#">
                <li class="list-inline-item  borderd-tunnel">
                    <h5 class="mb-0">56210</h5>
                    <p class="text-muted font-14">Payments</p>
                    <i class="fa fa-money-check"></i>
                </li>
            </a>

            <a href="#">
                <li class="list-inline-item  borderd-tunnel surport-tickets">
                    <h5 class="mb-0">12485</h5>
                    <p class="text-muted font-14">Tickets</p>
                    <i class="fa fa-envelope"></i>
                    <button class="opened-surport">
                        20
                    </button>
                </li>
            </a>

        </ul>

        <hr/>


        <p>Transactions</p>

        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
            <li class="list-inline-item">
                <h5 class="mb-0">25610</h5>
                <p class="text-muted font-14">Completed Payments</p>
            </li>
            <li class="list-inline-item">
                <h5 class="mb-0">56210</h5>
                <p class="text-muted font-14">Pending Payements</p>
            </li>
            <li class="list-inline-item">
                <h5 class="mb-0">12485</h5>
                <p class="text-muted font-14">Canceled Payments</p>
            </li>
        </ul>

        <div id="morris-line-example" class="morris-chart-height"></div>

    </div>
    </div>

    <div class="white-backgroud box-shadow ideal-remit-user-profile-histroy">
        <div class="payment-history-outter-action">
            <div class="search-form-toggle-container relative">
                <p>Transactions</p>
                <form>
                    <div class="search-payment-history">
                        <input type="text" placeholder="Search payments ...">
                        <div class="search-histroy-action-btn">
                            <button id="search-button" type="submit" class="ideal-remit-search-btn-history">Go</button>
                            <button id="close-search-form" type="button"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <button class="search-toggle-handle" id="search-history-toggle"><i class="fa fa-search"></i></button>
            <a href="#">Sent Payment</a>
            <a href="#">Pending Payment</a>
            <a href="#">Canceled Payment</a>
        </div>
        <table id="datatable" class="table table-striped table-hover">
            <thead>
            <tr>
                <th> Date</th>
                <th> Payment to</th>
                <th> country </th>
                <th> Status </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td> <a href="javascript:;">27 May 18</a> </td>
                <td class="relative"> Oziri emeka emmanuel
                    <div class="payment-view-more-info">
                        <a href="#"> view </a>
                        <a href="#"> edit </a>
                        <a href="#"> delete </a>
                    </div>
                </td>
                <td> Nigeria </td>
                <td> <a href="javascript:;" class="btn default btn-xs green-stripe"><button class="paypent-status pending">Pending</button> </a>
                </td>
            </tr>
            <tr>
                <td> <a href="javascript:;">27 May 18</a> </td>
                <td class="relative"> Frank Ruby </td>
                <td> Italy </td>
                <td> <a href="javascript:;" class="btn default btn-xs green-stripe"><button class="paypent-status success">Success</button> </a>
                </td>
            </tr>
            <tr>
                <td class="relative"> <a href="javascript:;">27 May 18</a> </td>
                <td> Uhra Issac </td>
                <td> Nigeria </td>
                <td> <a href="javascript:;" class="btn default btn-xs green-stripe"><button class="paypent-status cancelled">cancelled</button> </a>
                </td>
            </tr>
            <tr>
                <td> <a href="javascript:;">27 May 18</a> </td>
                <td class="relative"> John guvanni </td>
                <td> Italy </td>
                <td> <a href="javascript:;" class="btn default btn-xs green-stripe"><button class="paypent-status unknown">Unknown</button> </a>
                </td>
            </tr>
            <tr>
                <td> <a href="javascript:;">27 May 18</a> </td>
                <td class="relative"> Chinedu Nelson </td>
                <td> Nigeria </td>
                <td> <a href="javascript:;" class="btn default btn-xs green-stripe"><button class="paypent-status pending">Pending</button> </a>
                </td>
            </tr>
            <tr>
                <td> <a href="javascript:;">27 May 18</a> </td>
                <td class="relative"> Alex john </td>
                <td> Korea </td>
                <td> <a href="javascript:;" class="btn default btn-xs green-stripe"><button class="paypent-status pending">Pending</button> </a>
                </td>
            </tr>
            <tr>

                <td> <a href="javascript:;">27 May 18</a> </td>
                <td class="relative"> chieneye gift </td>
                <td> Nigeria </td>
                <td> <a href="javascript:;" class="btn default btn-xs green-stripe"><button class="paypent-status pending">Pending</button> </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>


@stop

@section('scripts')
    <script src="{{url('js/jquery.dataTables.min.js')}}"></script>
    <script>

        $(document).ready(function() {
            $('#datatable').DataTable();

        } );

    </script>
@stop