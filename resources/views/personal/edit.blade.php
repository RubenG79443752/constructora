@extends('layouts.app')

@section('template_title')
    Actualizar personal
@endsection

@section('content')
    <section class="content container">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar personal</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('personals.update', $personal->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('personal.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
