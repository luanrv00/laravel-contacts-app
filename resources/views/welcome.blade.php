@extends("layouts.base")

@section("content")
<div class="field is-grouped">
    <div class="control">
        <a class="button is-primary is-light" href="{{route('contacts.create')}}">
            Adicionar um contato
        </a>
    </div>
</div>
@endsection
