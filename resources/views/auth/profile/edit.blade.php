@extends('layouts.app')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="post" action="{{ route('auth.profile.update', $user->id) }}">
        @csrf

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Name</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input" type="text" placeholder="Name" name="name" id="'name" value="{{$user->name}}">
                        <span class="icon is-small is-left">
          <i class="fas fa-user"></i>
        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control is-expanded has-icons-left has-icons-right">
                        <input class="input is-success" type="email" placeholder="Email"  name="email" value="{{$user->email}}">
                        <span class="icon is-small is-left">
          <i class="fas fa-envelope"></i>
        </span>
                        <span class="icon is-small is-right">
          <i class="fas fa-check"></i>
        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">Phone</div>
            <div class="field-body">
                <div class="field is-expanded">

                    <div class="field has-addons">

                        <p class="control is-expanded">
                            <input class="input" type="tel" placeholder="Your phone number" name="phone" value="{{$user->phone}}">
                        @if($errors ->has('phone'))
                            <p class="help is-danger" style="color:red; ">{{$errors->first('phone')}}</p>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Address</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <textarea class="textarea" placeholder="Explain how we can help you" name="address">{{$user->address}}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label">

            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <button class="button is-primary">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
