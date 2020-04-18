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
    margin: 100px;
    margin-right: 170px;
    margin-left: 170px;
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
                                <a href="/read-siswa" class="button-link">Atur Siswa</a>
                                </button>
                            </td>
                            <td>
                                <button class="button-menu">
                                <a href="/read-kelas" class="button-link">Atur Kelas</a>
                                </button>
                            </td>
                            <td>
                                <button class="button-menu">
                                <a href="/read-petugas" class="button-link">Atur Petugas</a>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button class="button-menu">
                                <a href="/read-spp/-1" class="button-link">Data SPP</a>
                                </button>
                            </td>
                            <td>
                                <button class="button-menu">
                                <a href="/create-spp" class="button-link">Entri Pembayaran</a>
                                </button>
                            </td>
                            <td>
                                <button class="button-menu">
                                <a href="/read-spp/ {{ Auth::user()->id}}" class="button-link">Histori Pembayaran</a>
                                </button>
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <button class="button-menu">
                                <a href="/generate-laporan/" class="button-link">Cetak Laporan</a>
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
