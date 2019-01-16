
@extends('layouts.app')
@section('content')
    <form method="post" >
        @csrf
        {{ method_field('patch') }}
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">From</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input" type="text" placeholder="Name" name="name" id="'name" >
                        <span class="icon is-small is-left">
          <i class="fas fa-user"></i>
        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control is-expanded has-icons-left has-icons-right">
                        <input class="input is-success" type="email" placeholder="Email"  name="email">
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
            <div class="field-label"></div>
            <div class="field-body">
                <div class="field is-expanded">
                    <div class="field has-addons">
                        <p class="control">
                            <a class="button is-static">
                                +84
                            </a>
                        </p>
                        <p class="control is-expanded">
                            <input class="input" type="tel" placeholder="Your phone number" name="phone" >
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Password</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input is-danger" type="password" placeholder="e.g. Partnership opportunity">
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">address</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
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
