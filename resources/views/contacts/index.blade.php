@extends("layouts.base")

@section("content")
@include("layouts.back")

@if (count($contacts) > 0)
<div class="table-container">
    <table class="table is-hoverable is-narrow">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Nome completo</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>País</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Av./Rua</th>
                <th>Nº</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td class="table-column">
                    <figure class="image is-64x64">
                        @if ($contact->photo)
                        <img class="is-rounded" src="{{$contact->photo}}">
                        @endif
                    </figure>
                </td>
                <td class="table-column">{{$contact->first_name . ' ' . $contact->last_name}}</td>
                <td class="table-column">{{$contact->email}}</td>
                <td class="table-column">{{$contact->phone}}</td>
                <td class="table-column">{{$contact->address->country}}</td>
                <td class="table-column">{{$contact->address->state}}</td>
                <td class="table-column">{{$contact->address->city}}</td>
                <td class="table-column">{{$contact->address->street}}</td>
                <td class="table-column">{{$contact->address->number}}</td>
                <td class="table-column">
                    <a class="edit" href="{{route('contacts.edit', ['contact' => $contact])}}">
                        <span class="icon"><i class="fa fa-pencil"></i></span>
                    </a>
                </td>
                <td class="table-column">
                    <form method="post" action="{{route('contacts.destroy', ['contact' => $contact])}}">
                        @csrf
                        @method("delete")
                        <button
                            class="remove button is-white has-text-info"
                            type="submit"
                            onclick="return confirm('Remover contato?')">
                            <span class="icon"><i class="fa fa-trash"></i></span>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="mt-6">
    <a class="button is-primary is-light" href="{{route('contacts.create')}}">
        Adicionar novo contato
    </a>
</div>
@else
<div>
    <p>Nenhum contato foi adicionado ainda.</p>
    <a href="{{route('contacts.create')}}">
        Clique aqui para adicionar
    </a>
</div>
@endif
@endsection
