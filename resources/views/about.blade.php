@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
<div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Profile Picture">
          <div class="card-body text-center">
            <h4 class="card-title">Nama Pengguna</h4>
            <p class="card-text">Jabatan / Deskripsi Singkat</p>
            <button class="btn btn-primary">Edit Profile</button>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="profileTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="settings-tab" data-bs-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="profileTabContent">
              <!-- Tab About -->
              <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                <h5 class="card-title">Tentang Saya</h5>
                <p class="card-text">Isi dengan deskripsi singkat tentang pengguna.</p>
              </div>
              <!-- Tab Contact -->
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <h5 class="card-title">Kontak</h5>
                <p>Email: user@example.com</p>
                <p>Telepon: +62 123 456 7890</p>
              </div>
              <!-- Tab Settings -->
              <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <h5 class="card-title">Pengaturan</h5>
                <button class="btn btn-danger">Logout</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
