<div class="bg-gray-800">
    <div class="grid row">
        <div class="grid grid-cols-3 gap-2 p-8 ">
            @foreach($vacancies as $vacancy)

            <x-post-card :vacancy="$vacancy" />
            @endforeach

        </div>
    </div>
</div>
<link rel="stylesheet" href="{{asset('css/app.css')}}">