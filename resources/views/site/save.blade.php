@extends("layouts.site.template")



@section("contenu")




votre nom est: {{$request->nom}}
<br>
votre prenom est: {{$request->prenom}}
<br>
votre email est: {{$request->email}}
<br> 
votre message est:  {{$request->message}}
<hr>
@php
$tva=20;
$ht=$request->ht;
$ttc=$ht*(1+$tva/100);
$notes=[12,14,16];
@endphp
le montant tcc est: {{$ttc}}euro TTC
<h1>liste des notes</h1>
<table border ='1'>
    <tr>
@foreach($notes as $note)
    <td>
    {{$note}}
    </td>
@endforeach
    </tr>
</table>
@endsection