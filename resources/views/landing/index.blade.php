@extends('layouts.main')

@section('csstambahan')
    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            display: none;
        }

        .uk-divider-icon::after,
        .uk-divider-icon::before {
            border-bottom: 1px solid black;
        }

        .uk-card {
            box-shadow: 5px 5px 10px #bebebe,
                -5px -5px 10px #ffffff;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
@endsection
@section('section')
    <div class="container">
        <div class="uk-margin-medium-top">
            <ul class="uk-flex-center uk-tab-bottom" uk-tab>
                <li class="uk-active"><a class="text-decoration-none" href="#tab1">Buat Pengaduan</a></li>
                <li><a class="text-decoration-none" href="#tab2">Daftar Pengaduan</a></li>
                <li><a class="text-decoration-none" href="#tab3">Pengaduan Anda</a></li>
            </ul>
        </div>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1">
                <header>Tambahkan pengaduan anda</header>
                <form action="/" method="POST">
                    @csrf
                    <div class="uk-margin">
                        <label class="uk-form-label" for="Judul">Judul Pengaduan</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="Judul" name="judul" type="text"
                                placeholder="Tuliskan Disini!">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-select">Pilih Category</label>
                        <div class="uk-form-controls">
                            <select class="uk-select" name="category" id="form-stacked-select">
                                <option selected>Pilih category pengaduan</option>
                                @foreach ($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="Isi-pengaduan">Judul Pengaduan</label>
                        <div class="uk-form-controls">
                            <textarea class="uk-textarea" name="body" rows="5" id="Isi-pengaduan" placeholder="Tuliskan disini!"
                                aria-label="Textarea"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Kirim</button>

                </form>
            </div>
            <div class="tab-pane fade" id="tab2">
                <header>Semua Pengaduan</header>
                <div class="container">
                    <table id="example" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Judul Pengaduan</th>
                                <th>Category</th>
                                <th>Isi Pengaduan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaduans as $pengaduan)
                                <tr>
                                    <td>Author</td>
                                    {{-- <td>{{ $pengaduan->user->name }}</td> --}}
                                    <td>{{ $pengaduan->judul }}</td>
                                    <td>{{ $pengaduan->category->name }}</td>
                                    <td>{{ $pengaduan->body }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Judul Pengaduan</th>
                                <th>Category</th>
                                <th>Isi Pengaduan</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="tab3">
                <div class="uk-card uk-card-default uk-card-body">
                    <div class="uk-card-badge uk-label">Category</div>
                    <h3 class="uk-card-title">Kaizensheesh</h3>
                    <p>Lorem ipsum color sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.</p>
                </div>
                <hr class="uk-divider-icon">
                <div class="uk-card uk-card-default uk-card-body">
                    <div class="uk-card-badge uk-label">Category</div>
                    <h3 class="uk-card-title">B e n e v i e n t o</h3>
                    <p>Lorem ipsum color sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.</p>
                </div>
                <hr class="uk-divider-icon">
                <div class="uk-card uk-card-default uk-card-body">
                    <div class="uk-card-badge uk-label">Category</div>
                    <h3 class="uk-card-title">HyuugaSenpai</h3>
                    <p>Lorem ipsum color sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.</p>
                </div>
                <hr class="uk-divider-icon">
                <div class="uk-card uk-card-default uk-card-body">
                    <div class="uk-card-badge uk-label">Category</div>
                    <h3 class="uk-card-title">Prassxcc</h3>
                    <p>Lorem ipsum color sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.</p>
                </div>
                <hr class="uk-divider-icon">
            </div>
        </div>

    @section('scripttambahan')
        <script>
            // Fungsi untuk menangani peristiwa klik pada tab
            function switchTab(tabId) {
                // Menghapus kelas 'uk-active' dari semua tab
                document.querySelectorAll('.uk-tab-bottom > li').forEach(function(tab) {
                    tab.classList.remove('uk-active');
                });

                // Menghapus kelas 'uk-active' dari semua tab-pane
                document.querySelectorAll('.tab-content > .tab-pane').forEach(function(tabPane) {
                    tabPane.classList.remove('show', 'active');
                });

                // Menambahkan kelas 'uk-active' ke tab yang dipilih
                document.querySelector(`[href="#${tabId}"]`).parentNode.classList.add('uk-active');

                // Menambahkan kelas 'show active' ke tab-pane yang sesuai
                document.getElementById(tabId).classList.add('show', 'active');
            }

            // Menangani peristiwa klik pada tab
            document.querySelectorAll('.uk-tab-bottom > li').forEach(function(tab) {
                tab.addEventListener('click', function(event) {
                    event.preventDefault();
                    var tabId = this.querySelector('a').getAttribute('href').substring(1);
                    switchTab(tabId);
                });
            });

            // Secara default, aktifkan tab pertama
            switchTab('tab1');
        </script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.uikit.min.js"></script>
        <script>
            new DataTable('#example');
        </script>
    @endsection
</div>
@endsection
