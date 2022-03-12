<x-app-layout>

    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Blog') }}
            </h2>
    </x-slot>

    @foreach($posts as $post)
    
    <div class="card">
    <div class="card-body">
        <h5 class="card-title">IINFO POSTE :</h5>
        <p class="card-text">
            <div> <b> Date : </b> {{ $post->created_at->format('D M Y') }} </div>

            <div> <b> Utilisateur : </b> {{ $post->user->name}} </div>

            <div> <b> Poste : </b> {{ $post->title}} </div>
        </p>
        
    </div>
    </div>
    <br>
    <br>
    @endforeach
</x-app-layout>