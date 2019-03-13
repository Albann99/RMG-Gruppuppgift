@extends('layouts.app')

@section('content')

<div class="card-group" style="max-width: 100%;">
  <div class="card" style="margin:20px; border:1px solid black;">
    <img src="https://www.bmw.com.au/content/dam/bmw/common/all-models/m-series/m3-sedan/2017/at-a-glance/BMW-m3-sedan-at-a-glance-driving-dynamics-desktop.jpg/_jcr_content/renditions/cq5dam.resized.img.890.medium.time1487342976922.jpg" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">BMW M3</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <form>
      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="firstName">First Name</label>
      <input type="first" class="form-control" id="firstName" placeholder="Spetim">
    </div>
    <div class="form-group col-md-6">
      <label for="lastName">Last Name</label>
      <input type="last" class="form-control" id="lastName" placeholder="Hasani">
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="....@live.se">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="phoneNumber">PHONE NUMBER</label>
      <input type="phone" class="form-control" placeholder="+4600..">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">HYRA</button>
</form>
    </div>
  </div>
  <div class="card" style="margin:20px; border:1px solid black;">
    <img src="https://www.bmw.com.au/content/dam/bmw/common/all-models/m-series/m3-sedan/2017/at-a-glance/BMW-m3-sedan-at-a-glance-driving-dynamics-desktop.jpg/_jcr_content/renditions/cq5dam.resized.img.890.medium.time1487342976922.jpg" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">BMW M3</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <form>
      <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="firstName">First Name</label>
      <input type="first" class="form-control" id="firstName" placeholder="Spetim">
    </div>
    <div class="form-group col-md-6">
      <label for="lastName">Last Name</label>
      <input type="last" class="form-control" id="lastName" placeholder="Hasani">
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="....@live.se">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="phoneNumber">PHONE NUMBER</label>
      <input type="phone" class="form-control" placeholder="+4600..">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">HYRA</button>
</form>
</form>
    </div>
  </div>
</div>

@endsection
