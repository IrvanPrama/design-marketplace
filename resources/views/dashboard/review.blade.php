@extends('layout.master')

@section('name','Dashboard')

@section('nav-item')

@section('content')
<div class="container d-flex justify-content-center mt-5">
    <div class="card" style="width: 25rem; border-radius: 0">
        <div class="card-body">
            <form action="/review/create" method="post">
                <input type="text" class="form-control" value="{{auth()->user()->name}}" hidden>
                <div class="form-group">
                    <label for="review">Tulis Review Anda</label>
                    <textarea class="form-control" rows="4" style="border-radius: 0"
                        placeholder="Pengerjaan designnya cepat, harga bisa menyesuaikan . . ."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Review</button>
            </form>
        </div>
    </div>
</div>
@endsection