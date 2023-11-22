@extends('layouts.app')

@section('title')

@section('contents')
<h1 class="mb-0">Detail Product</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">NamaProduk</label>
        <input type="text" name="NamaProduk" class="form-control" placeholder="NamaProduk" value="{{ $product->NamaProduk }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">JenisTanaman</label>
        <input type="text" name="JenisTanaman" class="form-control" placeholder="JenisTanaman" value="{{ $product->JenisTanaman }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea class="form-control" name="Deskripsi" placeholder="Deskripsi" readonly>{{ $product->Deskripsi }}</textarea>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">stock</label>
        <input type="text" name="stock" class="form-control" placeholder="stock" value="{{ $product->stock }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">harga</label>
        <input type="text" name="harga" class="form-control" placeholder="harga" value="{{ $product->harga }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
    </div>
</div>
@endsection