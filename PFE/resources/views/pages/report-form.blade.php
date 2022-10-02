@extends('layouts.app', ['activePage' => 'missions-list', 'titlePage' => __('Missions d`audit')])

@section('content')
<div class="content">
    <div id="smartwizard">
        <ul>
            <li class="nav-item active"><a id="step-1-link" href="#step-1">Étape 1<br /><small>Info Entreprise</small></a></li>
            <li class="nav-item done"><a id="step-2-link" href="#step-2">Étape 2<br /><small>Mesures organisationnelles</small></a></li>
            <li class="nav-item done"><a id="step-3-link" href="#step-3">Étape 3<br /><small>Mesures techniques</small></a></li>
            <li class="nav-item done"><a id="step-4-link" href="#step-4">Étape 4<br /><small>Mesures physiques</small></a></li>
        </ul>
     <input type="hidden" id="report-id" value="{{$id}}">
     <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <div>
            <div id="step-1" class="">
                @include('pages.report_form.corp_inf', ['corp'=>$corp,'year'=>$year])
            </div>
            <div id="step-2" class="">
                @include('pages.report_form.mesures_org', ['report'=>$reportOrg])
            </div>
            <div id="step-3" class="">
                @include('pages.report_form.mesures_tech', ['report'=>$reportTech])
            </div>
            <div id="step-4" class="">
                @include('pages.report_form.mesures_phy', ['report'=>$reportPhy])
            </div>
        </div>
    </div>
</div>
@endsection
