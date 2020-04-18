@extends('layouts.app')

@section('content')

<style type="text/css">
    
 .datap{
    background-color: white;
 }

 .button-menu{
    width: 200px;
    height: 100px;
    padding: 20px;
    margin: 20px;
    color: white;
    background-color: #5eb1bf;
    border-style: solid;
    font-size: 20px;
 }

 .content-center{
    margin: 170px;
    margin-right: 230px;
    margin-left: 230px;
    align-content: center;
    align-self: center;
    vertical-align: middle;
 }

 button{
    cursor: pointer;
 }

 .button-link{
    color: white;
 }

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="content-center">
                    <table class="content-center">
                        <tr>
                            <td>
                                <button class="button-menu">
                                <a href="/create-spp" class="button-link">Entri Pembayaran</a>
                                </button>
                            </td>
                            <td>
                                <button class="button-menu">
                                <a href="/read-spp/-1" class="button-link">Histori Pembayaran</a>
                                </button>
                            </td>
                        </tr>
                    </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
