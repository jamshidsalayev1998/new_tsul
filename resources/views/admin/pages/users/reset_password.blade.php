@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Yangi parol generatsiya qilindi</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Foydalanuvchi: {{ $user->name }}</h3>
                            </div>
                            <div class="card-body">
                                <p>Foydalanuvchi uchun yangi login va parol muvaffaqiyatli yaratildi. Iltimos, ushbu
                                    ma'lumotlarni nusxalab oling, ular boshqa ko'rsatilmaydi.</p>

                                <div class="alert alert-info py-4">
                                    <h4 class="mb-3">Kirish ma'lumotlari:</h4>
                                    <div class="mb-2"><strong>Login:</strong> <code>{{ $user->username }}</code></div>
                                    <div><strong>Yangi Parol:</strong> <code>{{ $plainPassword }}</code></div>
                                </div>

                                <div class="mt-4">
                                    <a href="{{ route('users.index') }}" class="btn btn-primary">Foydalanuvchilar ro'yxatiga
                                        qaytish</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection