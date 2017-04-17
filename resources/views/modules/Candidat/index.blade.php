@extends('layouts.app')

@section('content')
    {{--<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->--}}

    {{--<table class="table">--}}
    {{--<thead>--}}
    {{--<tr>--}}
    {{--<th>nom</th>--}}
    {{--<th>prenom</th>--}}
    {{--<th>address</th>--}}
    {{--<th>telephone</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}

    {{--@if ($personnels)--}}

    {{--@foreach ($personnels as $personnel)--}}


    {{--<tr>--}}
    {{--<td>{{$personnel->name}}</td>--}}
    {{--<td>{{$personnel->prenom}}</td>--}}
    {{--<td>{{$personnel->adress}} </td>--}}
    {{--<td>{{$personnel->telephone}} </td>--}}
    {{--</tr>--}}
    {{--@endforeach--}}
    {{--@endif--}}
    {{--</tbody>--}}
    {{--</table>--}}
    {{--</div>--}}

    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{url("/candidat/create")}}" class="btn btn-success btn-icon btn">
                <i class="fa-plus">
                    <span>Ajouter un Candidat </span>
                </i>
            </a>

            <div class="panel-options">
                <a href="#" data-toggle="panel">
                    <span class="collapse-icon">&ndash;</span>
                    <span class="expand-icon">+</span>
                </a>
                <a href="#" data-toggle="remove">
                    &times;
                </a>
            </div>
        </div>
        <div class="panel-body">

            {{--<script type="text/javascript">--}}
            {{--jQuery(document).ready(function($)--}}
            {{--{--}}
            {{--$("#example-2").dataTable({--}}
            {{--dom: "t" + "<'row'<'col-xs-6'i><'col-xs-6'p>>",--}}
            {{--aoColumns: [--}}
            {{--{bSortable: false},--}}
            {{--null,--}}
            {{--null,--}}
            {{--null,--}}
            {{--null--}}
            {{--],--}}
            {{--});--}}

            {{--// Replace checkboxes when they appear--}}
            {{--var $state = $("#example-2 thead input[type='checkbox']");--}}

            {{--$("#example-2").on('draw.dt', function()--}}
            {{--{--}}
            {{--cbr_replace();--}}

            {{--$state.trigger('change');--}}
            {{--});--}}

            {{--// Script to select all checkboxes--}}
            {{--$state.on('change', function(ev)--}}
            {{--{--}}
            {{--var $chcks = $("#example-2 tbody input[type='checkbox']");--}}

            {{--if($state.is(':checked'))--}}
            {{--{--}}
            {{--$chcks.prop('checked', true).trigger('change');--}}
            {{--}--}}
            {{--else--}}
            {{--{--}}
            {{--$chcks.prop('checked', false).trigger('change');--}}
            {{--}--}}
            {{--});--}}
            {{--});--}}
            {{--</script>--}}

            <table class="table table-bordered table-striped" id="example-2">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adress</th>
                    <th>Telephone</th>
                    <th>CIN</th>
                    <th>Action</th>
                </tr>
                </thead>
                @if($candidats)
                    <tbody class="middle-align">
                    @foreach($candidats as $candidat)
                        <tr>
                            <td>{{$candidat->nom}}</td>
                            <td>{{$candidat->prenom}}</td>
                            <td>{{$candidat->adresse}}</td>
                            <td>{{$candidat->telephone}}</td>
                            <td>{{$candidat->cin}}</td>
                            <td>
                                <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                    Edit
                                </a>

                                <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                    Suprimmer
                                </a>

                                <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                    Profile
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                @endif
            </table>

        </div>
    </div>
@endsection
